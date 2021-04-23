<?php

namespace App\Http\Controllers;
use App\Models\ShoppingCart;
use App\Models\Product;
use App\Models\ProductImage;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function take(){
        $products=ShoppingCart::where('id',);
        dd($products);
        // return view('cart.index',[
        //     'products'=>$products]);
    }

    public function index(){
        return view('cart.index'); 
    }

    public function addToCart(Request $request){
        $product = Product::where('id', $request->id)->first();

        // if(!isset($_COOKIE['cart_id'])) setcookie('cart_id', uniqid());
        // $cart_id = $_COOKIE['cart_id'];
        // \Cart::session($cart_id);

        // \Cart::add
        ShoppingCart::create([
            
            'id' => $product->id,
            'user_id'=>1,
            
            // 'name' => $product->title,
            // 'price' => $product->new_price ? $product->new_price : $product->price,
            // 'quantity' => (int) $request->qty,
            // 'attributes' => [
            //     'img' => isset($product->images[0]->img) ? $product->images[0]->img : 'no_image.png'
            // ]
        ]);

        return response()->json($product->id);
    }

}

