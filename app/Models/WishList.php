<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    protected $table = 'wish_lish';
    public $timestamps = false;
    public function userRelationship(){
        return $this->belongsTo(User::class,'user_id');

    }
    public function productRelationship(){
        return $this->belongsTo(Products::class,'product_id');
    }
}
