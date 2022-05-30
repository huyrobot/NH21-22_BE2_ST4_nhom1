<?php

namespace App\Http\Controllers;

use App\Http\Requests\Menu\HastagBlogRequest;
use App\Http\Services\HastagBlogService;
use Illuminate\Http\Request;
use App\Models\HastagBlog;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HastagBlogController extends Controller
{
    protected $hastagBlogService;
    public function __construct(HastagBlogService $hastagBlogService)
    {
        $this->hastagBlogService = $hastagBlogService;
    }
    public function updateHastagBlog($id){
        $hastag = HastagBlog::find($id);
        //dd($hastag);
        $test = DB::Table('blog')->select('id')->get();
        return view('admin.addmenu.updateHastagBlog',[
            'title' => 'Update Hastag Blog',
            'title2' => 'Update data',
            'id' => $hastag->id,
            'idBlog' => $test,
            'product_id' => $hastag->product_id,
            'hastag_blog' => $hastag->hastag_blog,
        ]);
    }
    public function updateHastagBlogExcute(Request $request){
        //dd($request);
        DB::Table('hastag_blog')->where('id',$request->id)
            ->update(['blog_id'=>$request->blog_id,
                'hastag_blog'=>$request->hastag_blog,
            ]);
        Session::flash('success','Update Hastag successfully');

        return redirect('admin/menus/listHastagBlog');
    }
    public function showListHastagBlog(){
        return view('admin.listmenu.listHastagBlog',[
            'title' => 'List Hastag Blog',
            'title2' => 'List',
            'blog' => $this->hastagBlogService->getAll(),
        ]);
    }
    public function addHastagBlog(){
        $test = DB::Table('blog')->select('id')->get();
        //print_r($test);
        //dd($test);
        return view('admin.addmenu.insertHastagBlog',[
            'title' => 'Add Hastag Blog',
            'title2' => 'Add Data',
            'idBlog' => $test,
        ]);
    }
    public function insertHastagBlog(HastagBlogRequest $request){
        //dd($request);

        $this->hastagBlogService->create($request);

        return redirect('admin/menus/listHastagProduct');
    }

    public function destroy($id)
    {
        $hastag = HastagBlog::find($id);

        $hastag->delete();
        Session::flash('success','Hastag deleted');

        return redirect()->back();
    }

}
