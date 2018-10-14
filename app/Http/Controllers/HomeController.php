<?php

namespace App\Http\Controllers;

use App\Category;
use App\Currency;
use App\Opinion;
use App\Product;
use App\Setting;
use App\Slideshow;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slideshow::where('status', 1)->get();
        $settings = Setting::find(1);
        $categories = Category::where('status', 1)->get();
        $products = Product::where('status', 1)->get();
        $latest_products = Product::orderBy('id', 'desc')->take(10)->get();
        $opinions = Opinion::all();

        $currency = Currency::find(2);
        return view('home', compact('sliders', 'settings', 'categories', 'products', 'currency', 'latest_products','opinions'));
    }
}
