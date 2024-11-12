<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index()
    {
        // login
        $wishlists = Wishlist::where('user_id', 1)->get();
        $pageTitle = 'لیست علاقه‌مندی ها';
        return view('wishlist', compact('wishlists' ,'pageTitle'));
    }
    public function add(Request $request)
    {
        $product = Product::findOrFail($request->id);

        // if login
        $item = Wishlist::where('product_id', $request->id)->where('user_id', 1)->first();
        if (!$item) {
            Wishlist::create([
                'product_id' => $request->id,
                'user_id' => 1,
            ]);
            return redirect()->back()->with('success', 'محصول "' . $product->name . '" به لیست علاقه‌مندی ها اضافه شد!');
        }
        return redirect()->back()->with('success', $product->name.' در لیست علاقه‌مندی ها موجود است! ');
    }
    public function remove(Request $request){
        $item = Wishlist::findOrFail($request->id);
        $item->delete();
        return redirect()->back()->with('success' , 'محصول از لیست علاقه‌مندی ها حذف شد');
    }
}
