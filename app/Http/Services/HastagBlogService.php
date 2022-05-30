<?php

namespace App\Http\Services;
use App\Models\HastagBlog;
use Illuminate\Support\Facades\Session;

class HastagBlogService
{
    public function getAll(){
        return HastagBlog::paginate(10);
    }
    public function create($request){
        try {
            HastagBlog::create([
                "blog_id" => (string) $request->input('blogID'),
                "hastag_blog" => (string) $request->input('hastagName'),
            ]);
            Session::flash('success','Add Hastag successfully');
        }catch (\Exception $err){
            Session::flash('error',$err->getMessage());
            return false;
        }
        return true;
    }
}
