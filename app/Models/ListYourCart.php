<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListYourCart extends Model
{
    protected $table = 'list_your_cart';
    public $timestamps = false;
    public function productsRelationship(){
        return $this->belongsTo(Products::class,'product_id');
    }
    public function yourCartRelationship(){
        return $this->belongsTo(YourCart::class,'yourCart_id');
    }
}
