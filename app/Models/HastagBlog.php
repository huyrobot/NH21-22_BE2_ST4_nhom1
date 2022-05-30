<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HastagBlog extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'blog_id',
        'hastag_blog',
    ];
    protected $primaryKey = 'id';
    protected $table = 'hastag_blog';
    public $timestamps = false;

    public function hastagBlogRelationship(){
        return $this->belongsTo(Blog::class,'blog_id');

    }
}
