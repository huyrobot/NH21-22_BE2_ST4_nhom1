<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable=[
        'coupon_code',
        'value',
    ];
    protected $primaryKey = 'coupon_code';
    protected $table = 'coupon';
    public $timestamps = false;


}
