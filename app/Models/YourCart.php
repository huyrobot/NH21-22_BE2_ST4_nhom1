<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YourCart extends Model
{
    protected $fillable=[
        'id',
        'user_id',
    ];
    protected $table = 'your_cart';
    public $timestamps = false;
    protected $primaryKey = 'id';


    public function listYourCartRelationship(){
        return $this->hasMany(ListYourCart::class,'yourCart_id','id');
    }
    public function userRelationship(){
        return $this->belongsTo(User::class,'user_id');

    }
}
