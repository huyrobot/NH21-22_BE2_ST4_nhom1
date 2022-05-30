<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HastagProduct extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'product_id',
        'hastag_product',
    ];
    protected $primaryKey = 'id';
    protected $table = 'hastag_product';
    public $timestamps = false;

    public function productsRelationship(){
        return $this->belongsTo(Products::class,'product_id');

    }
}
