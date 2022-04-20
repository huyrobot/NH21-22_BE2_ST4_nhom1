<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    public $timestamps = false;

    public function userRelationship(){
        return $this->belongsTo(User::class,'user_id');

    }
    public function yourCartRelationship(){
        return $this->belongsTo(YourCart::class,'yourCart_id');
    }
}
