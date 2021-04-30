<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ShoppingCart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    //
    public function index(){
        $products=Product::orderBy('created_at')->take(8)->get();
        // DB::delete('delete * from skjdhfksjfdh8d3d4a8fhd_shopping_carts');
        ShoppingCart::where('id','>', 0)->delete();
        return view('home.index',[
            'products'=>$products]);
    }

    public function contact(){
        return view('contact');
    }

    

    
   

}
