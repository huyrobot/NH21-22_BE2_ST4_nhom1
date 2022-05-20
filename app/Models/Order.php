<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=[
        'user_id',
        'yourCart_id',
        'coupon_code',
        'address',
    ];
    protected $primaryKey = 'user_id';

    protected $table = 'order';
    public $timestamps = false;

    public function userRelationship(){
        return $this->belongsTo(UserOfCoza::class,'user_id');

    }
    public function yourCartRelationship(){
        return $this->belongsTo(YourCart::class,'yourCart_id');
    }
}
