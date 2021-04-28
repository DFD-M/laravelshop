<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'firstname',
        'lastname',
        'adress',
        'total'
    ];
    
    // public function prod(){
    //     return $this->hasOne('App\Models\Product','product_id');
    // }

    //  public function products(){
    //     return $this->belongsTo('App\Models\Product');
    
}
