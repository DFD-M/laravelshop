<?php

namespace App\Http\Controllers;
use App\Models\ShoppingCart;
use Illuminate\Http\Request;

class ShopConroller extends Controller
{
    public function index(){
        $products=new ShoppingCart;
        dd($products->all());
        // return view('cart.index',[
        //     'products'=>$products]);
    }

}
