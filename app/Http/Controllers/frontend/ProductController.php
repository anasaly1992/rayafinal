<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Currency;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::latest()->paginate(12);
        $categories = Category::all();
        $currency = Currency::find(2);
        return view('front.products', compact('products','categories','currency'));
    }


}
