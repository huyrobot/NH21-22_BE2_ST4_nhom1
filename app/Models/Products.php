<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    public $timestamps = false;
    protected $primaryKey = 'id';

    public function hastagProductRelationship(){
        return $this->hasMany(HastagProduct::class,'product_id','id');
    }
    public function listYourCartRelationship(){
        return $this->hasMany(ListYourCart::class,'product_id','id');
    }
}
