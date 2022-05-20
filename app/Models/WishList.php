<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    protected $fillable=[
        'user_id',
        'product_id',
    ];
    protected $primaryKey = 'user_id';
    protected $table = 'wish_lish';
    public $timestamps = false;
    public function userRelationship(){
        return $this->belongsTo(UserOfCoza::class,'user_id');

    }
    public function productRelationship(){
        return $this->belongsTo(Products::class,'product_id');
    }
}
