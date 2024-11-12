<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\collections;
use App\Models\Comment;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function singel($id)
    {
        $product = Product::with(['category', 'collection', 'comments' , 'brand', 'sizes'])->findOrFail($id);
        // dd($product);
        $colorsWithoutSize = $product->sizes->whereNull('size')->pluck('color');
        $sizes = [];
        if ($colorsWithoutSize->isEmpty()) {
            $sizes = $product->sizes->groupBy('size')->map(function ($group) {
                return $group->pluck('color');
            });
        }
        $SimilarProducts = Product::where('category_id' , $product->category_id)->where('id' , '!=' , $product->id)->paginate(6);
        if($SimilarProducts->count() < 6){
            $i = 6 - $SimilarProducts->count();
            $p = Product::inRandomOrder()->where('id' , '!=' , $product->id)->take($i)->get();
            $SimilarProducts = $SimilarProducts->merge($p);
        }
        $pageTitle = $product->name;
        // dd();
        return view('product', compact('product', 'pageTitle', 'sizes' ,'colorsWithoutSize' , 'SimilarProducts'));
    }

    public function addComment(Request $request){
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
        return redirect()->route('product',['id'=>$request->product_id]);
    }
}
