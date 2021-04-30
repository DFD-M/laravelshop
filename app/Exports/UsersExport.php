<?php

namespace App\Exports;

use App\Models\ShoppingCart;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class UsersExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     // $all=DB::select('SELECT * FROM  skjdhfksjfdh8d3d4a8fhd_shopping_carts ORDER BY id DESC LIMIT 1');
        
    //     // return $all[0]->firstname ;

    //     $report = ShoppingCart::orderby('created_at')->latest()->get();
    //     return $report;
    // }

    public function view(): View
    {
        return view('post-excel', [
            'ShoppingCarts' => ShoppingCart::OrderBy('id')->get()
        ]);
    }
}




// class UserExport implements FromView
// {
//     public function view(): View
//     {
//         return view('cart', [
//             'ShoppingCarts' => ShoppingCart::all()
//         ]);
//     }
// }



