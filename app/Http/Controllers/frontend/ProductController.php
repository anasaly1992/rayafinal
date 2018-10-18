<?php

namespace App\Http\Controllers\frontend;

use App\Category;
use App\Currency;
use App\Http\Controllers\Controller;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

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
        return view('front.products', compact('products', 'categories', 'currency'));
    }

    //adding to shopping cart
    public function addToCart(Request $request)
    {

        Cart::add($request->id, $request->name, $request->quantity, $request->price);

        return back();

    }

    //Remove from shopping cart
    public function removeFromCart(Request $request)
    {

        if ($request->ajax() && isset($request->productId)) {
            Cart::remove($request->productId);
        }

        return response()->json(['success' => 'Data is successfully added', 200]);

    }

    public function cart()
    {
        return view('front.cart');
    }

}
