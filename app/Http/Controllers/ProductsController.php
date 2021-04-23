<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
class ProductsController extends Controller
{
    //
   
    public function cart()
    {
        return view('cart');
    }
    
    public function addToCart($id)
    {
        $product = Product::find($id);
        // dd($product);

        if(!$product) {

            abort(404);

        }

        $cart = sesson()->get('cart');
        

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                    $id => [
                        "title" => $product->title,
                        "quantity" => 1,
                        "price" => $product->price,
                        "img" =>  DB::select('select img from skjdhfksjfdh8d3d4a8fhd_product_images where product_id ='.$id)
                    ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "title" => $product->title,
            "quantity" => 1,
            "price" => $product->price,
            "img" =>DB::select('select skjdhfksjfdh8d3d4a8fhd_product_images.img from skjdhfksjfdh8d3d4a8fhd_product_images where product_id ='.$id)
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }
}
