<?php

namespace App\Http\Controllers\frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
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
        $products = Product::all();
        return view('front.products', compact('products'));
    }

    //adding to shopping cart 
    public function addToCart(Request $request){
     //  echo $request->id ; die ; 
       Cart::add($request->id, $request->name, $request->quantity, $request->price);
     
       
    }
     

}
