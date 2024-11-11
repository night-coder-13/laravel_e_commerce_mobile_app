<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\collections;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function singel($id)
    {
        $product = Product::with(['category', 'collection', 'brand', 'images', 'sizes'])->findOrFail($id);
        // dd($product);
        $colorsWithoutSize = $product->sizes->whereNull('size')->pluck('color');
        $sizes = [];
        if ($colorsWithoutSize->isEmpty()) {
            $sizes = $product->sizes->groupBy('size')->map(function ($group) {
                return $group->pluck('color');
            });
        }

        $pageTitle = $product->name;
        return view('product', compact('product', 'pageTitle', 'sizes' ,'colorsWithoutSize'));
    }
}
