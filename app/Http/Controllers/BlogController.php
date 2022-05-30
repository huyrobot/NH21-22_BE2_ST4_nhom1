<?php

namespace App\Http\Controllers;

use App\Http\Requests\Menu\BlogRequest;
use App\Http\Services\BlogService;
use Illuminate\Http\Request;
use App\Models\Blog;
use Faker\Provider\File;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    protected $blogService;
    public function __construct(BlogService $blogService)
    {
        $this->blogService = $blogService;
    }
    public function addBlog(){
        return view('admin.addmenu.insertBlog',[
            'title' => 'Add Blog',
            'title2' => 'Add Data',
        ]);
    }
    public function insertBlog(BlogRequest $request){
        //dd($request);

            if($request->hasFile('picture_Blog')){
                $file = $request->file('picture_Blog');
                $ext = $file->getClientOriginalName();
                $file->move('images/',$ext);
                $this->blogService->create($request);
                Session::flash('success','Add successful product');
            }
            else{
                Session::flash('error','Add product fail');
            }
        return redirect('admin/menus/listBlog');
    }
    public function updateBlog($id){
        $blog = Blog::find($id);
        return view('admin.addmenu.updateBlog',[
            'title' => 'Update blog',
            'title2' => 'Update data',
            'id' => $blog->id,
            'time_blog' => $blog->time_blog,
            'title_blog' => $blog->title_blog,
            'picture_Blog' => $blog->picture_Blog,
            'content_blog' => $blog->content_blog,
        ]);
    }
    public function updateBlogExcute(Request $request){
            if($request->hasFile('picture_Blog')){
                $file = $request->file('picture_Blog');
                $ext = $file->getClientOriginalName();
                $file->move('images/',$ext);
                DB::Table('blog')->where('id',$request->id)
                    ->update(['title_blog'=>$request->tieuDeBlog,
                        'content_blog'=>$request->noiDungBlog,
                        'time_blog'=>$request->timeBlog,
                        'picture_Blog'=>$request->file('picture_Blog')->getClientOriginalName(),
                    ]);
                Session::flash('success','Update successful Blog');
                return redirect('admin/menus/listBlog');
            }
            else{
                Session::flash('error','Update Blog Fail');
                return redirect()->back();
            }
    }
    public function destroy($id)
    {
        $blog = Blog::find($id);

        $blog->delete();
        Session::flash('success','Blog deleted');
        return redirect()->back();
    }
    public function showListBLog(){
        return view('admin.listmenu.listBlog',[
            'title' => 'Blog List',
            'title2' => 'List',
            'blog' => $this->blogService->getAll(),
        ]);
    }




}
