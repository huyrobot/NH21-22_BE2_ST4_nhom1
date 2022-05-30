<?php

namespace App\Http\Controllers;

use App\Http\Requests\Menu\ProductRequest;
use Database\Seeders\Product;
use Faker\Provider\File;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Http\Services\ProductService;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    protected $productService;
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function addProduct(){//màn hình add
        return view('admin.addmenu.insertProduct',[
            'title' => 'Add Product',
            'title2' => 'Add Data',
        ]);
    }
    public function updateProduct($id){//màn hình update
        $product = Products::find($id);
        //dd($product->weight_Product);
        return view('admin.addmenu.updateProduct',[
            'title' => 'Update product',
            'title2' => 'Update data',
            'id' => $product->id,
            'name_Product' => $product->name_Product,
            'price_Product' => $product->price_Product,
            'size_Product' => $product->size_Product,
            'color_Product' => $product->color_Product,
            'weight_Product' => (double)$product->weight_Product,
            'dimensisons_Product' => $product->dimensisons_Product,
            'materials_Product' => $product->materials_Product,
            'description_Product' => $product->description_Product,
        ]);
    }
    public function updateProductExcute(Request $request){
        //$this->productService->update($request,$product);

        //$products = Products::find($id);
        //$products = $request->id;
        //dd($request);
        if($request->hasFile('picture_Product')){
            $file = $request->file('picture_Product');
            $ext = $file->getClientOriginalName();
            //$filename = time().'.'.$ext;
            $file->move('images/',$ext);
            //time().'.'.$request->file('picture_Product')->getClientOriginalExtension()
            DB::Table('products')->where('id',$request->id)
                ->update(['name_Product'=>$request->tenSP,
                    'price_Product'=>$request->giaSP,
                    'size_Product'=>$request->size,
                    'color_Product'=>$request->color,
                    'weight_Product'=>$request->khoiLuong,
                    'materials_Product'=>$request->tyLe,
                    'dimensisons_Product'=>$request->chatLieu,
                    'description_Product'=>$request->moTa,
                    'picture_Product'=>$request->file('picture_Product')->getClientOriginalName(),
                ]);
            Session::flash('success','Update successful product');
            return redirect('admin/menus/listProduct');

        }
        else{
            Session::flash('error','Update product fail');
            return redirect()->back();
        }
    }

    public function insertProduct(ProductRequest $request){
        $products = new Products();
        //dd($request->file('picture_Product')->getClientOriginalName());

        if($request->hasFile('picture_Product')){
            $file = $request->file('picture_Product');
            $ext = $file->getClientOriginalName();
            //$filename = time().'.'.$ext;
            $file->move('images/',$ext);
            //time().'.'.$request->file('picture_Product')->getClientOriginalExtension()
            $this->productService->create($request);
            Session::flash('success','Add successful product');

        }

        //return redirect()->back();



//        $products->picture_Product = $request->input($request->file('picture_Product')->getClientOriginalName());
//        $products->name_Product = $request->input('name_Product');
//        $products->price_Product = $request->input('price_Product');
//        $products->size_Product = $request->input('size_Product');
//        $products->color_Product = $request->input('color_Product');
//        $products->weight_Product = $request->input('weight_Product');
//        $products->dimensisons_Product = $request->input('dimensisons_Product');
//        $products->materials_Product = $request->input('materials_Product');
//        $products->description_Product = $request->input('description_Product');

        return redirect('admin/menus/listProduct');
    }

    public function createProduct(ProductService $request){
        $result = $this->productService->create($request);
        return redirect('admin/menus/listProduct');
    }
    public function destroy($id)
    {
        $product = Products::find($id);
//        $path = 'images/'.$product->picture_Product;
//        if (File::exists($path)){
//            File::delete($path);
//        }
        $product->delete();
        Session::flash('success','Product deleted');

        return redirect()->back();
    }

    public function showListProduct(){
        return view('admin.listmenu.listProduct',[
            'title' => 'Products List',
            'title2' => 'List',
            'products' => $this->productService->getAll(),
        ]);
    }







}
