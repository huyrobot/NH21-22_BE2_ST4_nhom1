<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HastagBlog;

class HastagBlogController extends Controller
{
   
    function hastagBlogFunction(){
        return view('blog');
    }
    public function getHastag()
    {
        $hastagBlog = HastagBlog::paginate(5);
        return view('boxHastagBlog.crudHastagBlog',compact('hastagBlog'))
        ->with('i',(request()->input('page',1) -1 * 5));
    }

    public function add()
    {
        return view('boxHastagBlog.addHastagBlog');
    }
    public function save(Request $request)
    {
       $blog_id = $request->get('blog_id');
       $hastag_blog = $request->get('hastag_blog');
      

       HastagBlog::create([
           'blog_id'=> $blog_id,
           'hastag_blog'=>$hastag_blog,
       ]);

       return redirect()->route('boxHastagBlog.crudHastagBlog')
       ->with('thongbao','Them thanh cong!');
    }

    public function delete($blog_id)
    {
        $value = HastagBlog::where('blog_id',$blog_id)->first();
        $value->delete();
        return redirect()->route('boxHastagBlog.crudHastagBlog')
        ->with('thongbao','Xoa thanh cong!');
    }
    public function edit($product_id)
    {
        $value = HastagBlog::findOrFail($product_id);
        return  view('/boxHastagBlog/editHastagBlog',['value'=>$value]);
    }
    public function update(Request $request,$product_id)
    {
        $value = HastagBlog::findOrFail($product_id);
        $value->update([
            'hastag_blog'=>$request->get('hastag_blog'),
        ]);
        return redirect()->route('boxHastagBlog.crudHastagBlog')
        ->with('thongbao','Sua thanh cong!');
    }
}
