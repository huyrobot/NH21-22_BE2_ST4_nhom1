<?php

namespace App\Http\Controllers;

use App\Http\Requests\Menu\HastagProductRequest;
use App\Http\Services\HastagProductService;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\HastagProduct;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Menu\BlogRequest;
use App\Models\Blog;
use Faker\Provider\File;
use Illuminate\Support\Facades\Session;
class HastagProductController extends Controller
{
    protected $hastagProductService;
    public function __construct(HastagProductService $hastagProductService)
    {
        $this->hastagProductService = $hastagProductService;
    }

    public function addHastagProduct(){
        $test = DB::Table('products')->select('id')->get();
        //print_r($test);

        //dd($test);
        return view('admin.addmenu.insertHastagProduct',[
            'title' => 'Add Hastag Product',
            'title2' => 'Add Data',
            'idProduct' => $test,
        ]);
    }
    public function insertHastagProduct(HastagProductRequest $request){
        //dd($request);

        $this->hastagProductService->create($request);

        return redirect('admin/menus/listHastagProduct');
    }
    public function updateHastagProduct($id){
        $hastag = HastagProduct::find($id);
        //dd($hastag);
        $test = DB::Table('products')->select('id')->get();
        return view('admin.addmenu.updateHastagProduct',[
            'title' => 'Update blog',
            'title2' => 'Update data',
            'id' => $hastag->id,
            'idProduct' => $test,
            'product_id' => $hastag->product_id,
            'hastag_product' => $hastag->hastag_product,
        ]);
    }
    public function updateHastagProductExcute(Request $request){
        //dd($request);
        DB::Table('hastag_product')->where('id',$request->id)
            ->update(['product_id'=>$request->product_id,
                'hastag_product'=>$request->hastag_product,
            ]);
        Session::flash('success','Update Hastag successfully');
        return redirect('admin/menus/listHastagProduct');
    }
    public function destroy($id)
    {
        $hastag = HastagProduct::find($id);
//        $path = 'images/'.$product->picture_Product;
//        if (File::exists($path)){
//            File::delete($path);
//        }
        $hastag->delete();
        Session::flash('success','Hastag deleted');
        return redirect()->back();
    }
    public function showListHastagProduct(){
        return view('admin.listmenu.listHastagProduct',[
            'title' => 'Product Hastag List',
            'title2' => 'List',
            'blog' => $this->hastagProductService->getAll(),
        ]);
    }


}
