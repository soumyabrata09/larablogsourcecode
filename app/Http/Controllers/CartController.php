<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * The whole Cart functionalities is been implemented using crinsane shopping cart js API library
     * command :- composer require gloudemans/shoppingcart
     */
    public function index()
    {
        //as cart page also using productRecommender system, therefore we need to use return it from
        // the cart view
        $productRecommender = Product::ProductRecommender()->get();
        return view('cartPage')->with('productRecommender' ,$productRecommender);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // First we need to add the item to the cart.
        //Cart::add('id', 'name', 'quantity', 'value');
       $cartItem = Cart::add($request->id,$request->name,1,$request->price); // 1 as default value here
        // Next we associate a model with the item.
       Cart::associate($cartItem->rowId,'App\Product');
       //Alternatively
       //Cart::add($request->id,$request->name,1,$request->price)->associate('App\Product');
        //lets redirect to our cart page
        return redirect()->route('cart.index')->with('success_message','Item(s) been added to your cart successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
