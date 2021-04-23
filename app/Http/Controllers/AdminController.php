<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{

    public function display(){
        return view('admin.product');
    }
    public function save(Request $request){
        $title=$request->input('title');
        $in_stock=$request->input('in_stock');
        $price=$request->input('price');
        $description=$request->input('description');
        $category_id=$request->input('category_id');
        // $img=$request->input('img');

        DB::insert('insert into skjdhfksjfdh8d3d4a8fhd_products(title,in_stock,price,description,category_id) values(?,?,?,?,?)',
        [$title,$in_stock,$price,$description,$category_id]);

        return redirect('/admin/products')->with('success','Данные были успешно сохранены');

    }

    public function viewform(){
        return view('admin.productview');
    }

    public function index(){
        $product=DB::select('select * from skjdhfksjfdh8d3d4a8fhd_products');
        return view('admin.productview',['product'=>$product]);
    }

    public function edit_function($id){
        $product=DB::select('select * from skjdhfksjfdh8d3d4a8fhd_products where id=?',[$id]);
        return view('admin.productedit',['product'=>$product]);
    }

    public function update_function(Request $request,$id){
        $title=$request->input('title');
        $price=$request->input('price');
        $in_stock=$request->input('in_stock');
        $description=$request->input('description');
        $category_id=$request->input('category_id');
        
        DB::update('update  skjdhfksjfdh8d3d4a8fhd_products set title=?,price=?,in_stock=?,description=?,category_id=? where id=?',
        [$title,$price,$in_stock,$description,$category_id,$id]);
        return redirect('/admin/productsview')->with('success','Данные были успешно обновлены');
    }

    public function delete_function($id){
    DB::delete('delete from skjdhfksjfdh8d3d4a8fhd_products where id=?',[$id]);
    return redirect('/admin/productsview')->with('success','Данные были удалены');
    }
}

