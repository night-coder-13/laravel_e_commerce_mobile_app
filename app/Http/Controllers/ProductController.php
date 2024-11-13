<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\collections;
use App\Models\Comment;
use App\Models\Product;
use App\Models\Wishlist;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function singel($id)
    {
        $product = Product::with(['category', 'collection', 'comments', 'brand', 'sizes'])->findOrFail($id);

        // استخراج رنگ‌هایی که بدون سایز هستند
        $colorsWithoutSize = $product->sizes->whereNull('size')->pluck('color');

        // استخراج سایزها و رنگ‌ها
        $sizes = $product->sizes->whereNotNull('size')->groupBy('size')->map->pluck('color');

        // دریافت محصولات مشابه
        $similarProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->inRandomOrder() //  برای به دست آوردن نتایج تصادفی
            ->take(6)
            ->get();

        // در صورتی که تعداد محصولات مشابه کمتر از 6 بود، محصولات تصادفی را اضافه می‌کنیم
        if ($similarProducts->count() < 6) {
            $additionalProducts = Product::inRandomOrder()
                ->where('id', '!=', $product->id)
                ->take(6 - $similarProducts->count())
                ->get();

            $similarProducts = $similarProducts->merge($additionalProducts);
        }

        $pageTitle = $product->name;

        // بررسی برای اینکه آیا محصول در سبد خرید موجود هست یا نه
        $cart = session()->get('cart', []);
        // اطلاعات محصول در سبد خرید
        $cartItem = isset($cart[$product->id]) ? $cart[$product->id] : null;

        $wishlistStatus = Wishlist::where('product_id', $product->id)->where('user_id', 1)->first();

        return view('product.index', compact('product', 'pageTitle', 'sizes', 'colorsWithoutSize', 'similarProducts' , 'cartItem' , 'wishlistStatus'));
    }

    public function addComment(Request $request)
    {
        $request->validate([
            'product_id' => 'required|numeric',
            'rating' => 'required|numeric',
            'comment' => 'required|string',
        ]);
        // if(Auth::check()){
        //     return redirect()->route('home');
        // }
        Comment::create([
            'user_id' => '1',
            'product_id' => $request->product_id,
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);
        return redirect()->route('product', ['id' => $request->product_id]);
    }
}
