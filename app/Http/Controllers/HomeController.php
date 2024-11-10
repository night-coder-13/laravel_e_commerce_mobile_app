<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        
        $salesProducts = Product::where('status' , 1)->orderBy('sales_count' , 'desc')->limit(6)->get();
        $popularityProducts = Product::where('status' , 1)->orderBy('popularity_score' , 'desc')->limit(4)->get();
        $categories = Category::where('status' , 1)->limit(7)->get();
        $offer = Product::where('sale_price' , '>' , 0)->where('date_on_sale_from', '<=', Carbon::now())
        ->where('date_on_sale_to', '>=', Carbon::now())
        ->get();
        
        // dd($offer , $salesProducts ,$popularityProducts);
        return view('home', compact('salesProducts' , 'popularityProducts' , 'categories' ,'offer'));
    }
}
