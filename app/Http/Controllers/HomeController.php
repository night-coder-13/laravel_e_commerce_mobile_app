<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\collections;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        
        $salesProducts = Product::where('status' , 1)->orderBy('sales_count' , 'desc')->limit(6)->get();
        $popularityProducts = Product::where('status' , 1)->orderBy('popularity_score' , 'desc')->limit(4)->get();
        $categories = Category::where('status' , 1)->limit(7)->get();
        $collections = collections::where('id' , '>' , 0)->limit(7)->get();
        $offer = Product::where('sale_price' , '>' , 0)->where('date_on_sale_from', '<=', Carbon::now())
        ->where('date_on_sale_to', '>=', Carbon::now())
        ->limit(6)->get();
        
        // dd($offer , $salesProducts ,$popularityProducts);
        return view('home', compact('salesProducts' , 'popularityProducts' , 'collections' , 'categories' ,'offer'));
    }
}