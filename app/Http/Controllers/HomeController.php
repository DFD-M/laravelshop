<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(){
        $products=Product::orderBy('created_at')->take(8)->get();
        return view('home.index',[
            'products'=>$products]);
    }

    public function test(){
        $useer=Auth::user();
        if($useer->id>0){
            echo'Все ворк';
        }
    }

    public function add(Request $data){
        dd($data);
        // ShoppingCart::create([
        //     'product_id' => $data['product_id'],
        //     'user_id' => $data['user_id']
        // ]);
             
    }

    
   

}
