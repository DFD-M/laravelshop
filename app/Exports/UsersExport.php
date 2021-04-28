<?php

namespace App\Exports;

use App\Models\ShoppingCart;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // $all=DB::select('SELECT * FROM  skjdhfksjfdh8d3d4a8fhd_shopping_carts ORDER BY id DESC LIMIT 1');
        
        // return $all[0]->firstname ;

        $report = ShoppingCart::orderby('id')->latest()->get();
        return $report;
    }
}
