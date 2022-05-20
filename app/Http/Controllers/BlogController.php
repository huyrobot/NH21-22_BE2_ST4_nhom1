<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
class BlogController extends Controller
{
    function blogFunction(){
        return view('blog');
    }
    public function getBlog()
    {
        $blog = Blog::paginate(5);
        return view('boxBlog.crudBlog',compact('blog'))
        ->with('i',(request()->input('page',1) -1 * 5));
    }
    public function add()
    {
        return view('boxBlog.addBlog');
    }
    public function save(Request $request)
    {
       $time = $request->get('time_blog');
       $title = $request->get('title_blog');
       $picture = $request->get('picture_blog');
       $content = $request->get('content_blog');

       Blog::create([
           'time_blog'=> $time,
           'title_blog'=>$title,
           'picture_blog'=>$picture,
           'content_blog'=>$content,
       ]);

       return redirect()->route('boxBlog.crudBlog')
       ->with('thongbao','Them thanh cong!');
    }
    public function delete($id)
    {
        $value = Blog::findOrFail($id);
        $value->delete();
        return redirect()->route('boxBlog.crudBlog')
        ->with('thongbao','Xoa thanh cong!');
    }
    public function edit($id)
    {
        $value = Blog::findOrFail($id);
        // return  view('/blog-crud/editBlog',['value'=>$value]);
        return  view('/boxBlog/editBlog',['value'=>$value]);
    }
    public function update(Request $request,$id)
    {
        $value = Blog::findOrFail($id);
        
        $value->update([
            'time_blog'=>$request->get('time_blog'),
            'title_blog'=>$request->get('title_blog'),
            'picture_blog'=>$request->get('picture_blog'),
            'content_blog'=>$request->get('content_blog'),
        ]);
        return redirect()->route('boxBlog.crudBlog')
        ->with('thongbao','Sua thanh cong!');
    }
}
