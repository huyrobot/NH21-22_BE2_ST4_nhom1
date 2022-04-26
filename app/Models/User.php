<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    public $timestamps = false;
    protected $primaryKey = 'id';


    public function yourCartRelationship(){
        return $this->hasMany(YourCart::class,'user_id','id');
    }
    public function reviewProductRelationship(){
        return $this->hasMany(ReviewProduct::class,'user_id','id');
    }
    public function wishListRelationship(){
        return $this->hasMany(WishList::class,'user_id','id');
    }
    public function orderRelationship(){
        return $this->hasMany(Order::class,'user_id','id');
    }
}
