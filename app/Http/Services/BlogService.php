<?php

namespace App\Http\Services;
use App\Models\Blog;
use Faker\Provider\File;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class BlogService
{
    public function getAll(){
        return Blog::paginate(5);
    }
    public function create($request){
        try {
            Blog::create([
                "title_blog" => (string) $request->input('tieuDeBlog'),
                "content_blog" => (string) $request->input('noiDungBlog'),
                "time_blog" => (string) $request->input('timeBlog'),
                "picture_Blog" => $request->file('picture_Blog')->getClientOriginalName(),
            ]);

            Session::flash('success','Add successful Blog');
        }catch (\Exception $err){
            Session::flash('error',$err->getMessage());
            return false;
        }
        return true;
    }

}
