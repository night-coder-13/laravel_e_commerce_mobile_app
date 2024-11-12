<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Models\Order;
use App\Models\Product;
use App\Models\sizingProducts;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $pageTitle = 'سبد خرید';
        // $addresses = Auth::user()->addresses;
        $cart = $request->session()->get('cart');
        $cart_total_price = 0;
        if (isset($cart)) {
            foreach ($cart as $key => $item) {
                $price = $item['is_sale'] ? $item['sale_price'] : $item['price'];
                $cart_total_price += $price * $item['qty'];
            }
        }
        return view('cart.index', compact('cart', 'cart_total_price' , 'pageTitle'));
    }
    // public function increment(Request $request)
    // {
    //     $request->validate([
    //         'product_id' => 'required|integer|exists:products,id'
    //     ]);
    //     $product = Product::findOrFail($request->product_id);

    //     $cart = $request->session()->get('cart', []);

    //     if (isset($cart[$request->product_id])) {
    //         if ($cart[$request->product_id]["qty"] >= $product->quantity) {
    //             return redirect()->back()->with('error', 'محصول با بیشترین تعداد ممکن به سبد خرید اضافه شده');
    //         }
    //         $cart[$request->product_id]['qty']++;
    //     } else {
    //         $cart[$request->product_id] = [
    //             "name" => $product->name,
    //             "slug" => $product->slug,
    //             "quantity" => $product->quantity,
    //             "is_sale" => $product->is_sale,
    //             "price" => $product->price,
    //             "sale_price" => $product->sale_price,
    //             "primary_image" => $product->primary_image,
    //             "qty" => 1
    //         ];
    //     }

    //     $request->session()->put('cart', $cart);

    //     return redirect()->back()->with('success', 'محصول "' . $product->name . '" به سبد خرید اضافه شد');
    // }
    // public function decrement(Request $request)
    // {
    //     $request->validate([
    //         'product_id' => 'required|integer|exists:products,id',
    //         'qty' => 'required|integer'
    //     ]);

    //     $product = Product::findOrFail($request->product_id);

    //     if ($request->qty == 0) {
    //         return redirect()->back()->with('error', 'تعداد محصول مورد نظر کمتر از حد مجاز می باشد');
    //     }

    //     $cart = $request->session()->get('cart', []);

    //     if (isset($cart[$product->id])) {

    //         $cart[$product->id] = [
    //             "name" => $product->name,
    //             "slug" => $product->slug,
    //             "quantity" => $product->quantity,
    //             "is_sale" => $product->is_sale,
    //             "price" => $product->price,
    //             "sale_price" => $product->sale_price,
    //             "primary_image" => $product->primary_image,
    //             "qty" => $cart[$product->id]["qty"] - 1,
    //         ];
    //     }

    //     $request->session()->put('cart', $cart);

    //     return redirect()->back()->with('success', 'تعداد محصول مورد نظر از سبد خرید کاهش یافت');
    // }
    public function add(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer|exists:products,id',
            'qty' => 'required|integer'
        ]);

        $product = Product::findOrFail($request->product_id);
        if($product->quantity === 0){
            $sizes = $product->sizes;
            if($sizes->isEmpty()){
                return redirect()->back()->with('error', 'تعداد محصول مورد نظر بیشتر از موجودی می باشد');
            }else{
                if($request->has('size') && $request->size !== null && $request->has('color') && $request->color !== null){
                    $item = sizingProducts::where('size',$request->size)->where('color',$request->color)->first();
                    if($item){
                        return redirect()->back()->with('error', 'اطلاعات ناقص ارسال شده است !لطفا رنک ویا سایز انتخابی را دوباره چک کنید.');
                    }
                    if ($request->qty > $item->quantity) {
                        return redirect()->back()->with('error', 'تعداد محصول مورد نظر بیشتر از موجودی می باشد');
                    }
                }elseif($request->has('color') && $request->color !== null){
                    $item = sizingProducts::where('color',$request->color)->first();
                    if ($request->qty > $item->quantity) {
                        return redirect()->back()->with('error', 'تعداد محصول مورد نظر بیشتر از موجودی می باشد');
                    }
                }else{
                    return redirect()->back()->with('error', 'در انتخاب رنگ‌بندی و یا سایز‌بندی مشکلی وجود دارد!لطفا دوباره انتخاب کنید.');
                }
            }
        }

        $cart = $request->session()->get('cart', []);

        if (isset($cart[$product->id])) {
            $cart[$product->id]["qty"] = $request->qty;
        } else {
            $cart[$product->id] = [
                "name" => $product->name,
                "slug" => $product->slug,
                "quantity" => $product->quantity,
                "is_sale" => $product->is_sale,
                "price" => $product->price,
                "sale_price" => $product->sale_price,
                "primary_image" => $product->primary_image,
                "qty" => $request->qty
            ];
        }

        $request->session()->put('cart', $cart);

        return redirect()->back()->with('success', 'محصول مورد نظر به سبد خرید اضافه شد');
    }
    // public function remove(Request $request)
    // {
    //     $cart = $request->session()->get('cart');

    //     if (isset($cart[$request->product_id])) {
    //         unset($cart[$request->product_id]);
    //     }

    //     $request->session()->put('cart', $cart);

    //     return redirect()->back()->with('success', 'محصول مورد نظر از سبد خرید حذف شد');
    // }
    // public function clear(Request $request)
    // {
    //     $request->session()->put('cart', []);
    //     return redirect()->route('menu.index')->with('warning', 'سبد خرید شما خالی شد');
    // }
    // public function checkCoupon(Request $request)
    // {
    //     $request->validate([
    //         'code' => 'required|string',
    //     ]);

    //     $coupon = Coupon::where('code', $request->code)->where('expired_at', '>', Carbon::now())->first();

    //     if ($coupon == null) {
    //         return redirect()->route('cart.index')->withErrors(['code' => 'کد تخفیف وارد شده وجود ندارد']);
    //     }

    //     if (Order::where('user_id', Auth::id())->where('coupon_id', $coupon->id)->where('payment_status', 1)->exists()) {
    //         return redirect()->route('cart.index')->withErrors(['code' => 'شما قبلا از این کد تخفیف استفاده کرده اید']);
    //     }

    //     $request->session()->put('coupon', ['code' => $coupon->code, 'percent' => $coupon->percentage]);
    //     return redirect()->route('cart.index');
    // }
}
