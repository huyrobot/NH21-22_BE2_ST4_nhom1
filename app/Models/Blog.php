<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'time_blog',
        'title_blog',
        'picture_Blog',
        'content_blog',
    ];
    protected $table = 'blog';
    public $timestamps = false;
    protected $primaryKey = 'id';

    public function blogRelationship(){
        return $this->hasMany(HastagBlog::class,'blog_id','id');
    }
}
