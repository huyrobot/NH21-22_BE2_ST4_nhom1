<?php

namespace App\Http\Controllers;
use App\Models\HastagProduct;
use App\Models\Products;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\HastagBlog;

class ViewController extends Controller
{
    public function viewFunction(Request $request, $namePage = 'index', $hastag_name = "")
    {
        //search
        $search_product = $request['search-product'];

        //index
        if ($namePage == 'index') {

            if (isset($search_product)) {
                $data = Products::where('name_Product', 'LIKE', "%$search_product%")->take(12)->get();
                return view($namePage, compact('data', 'search_product'));
            } else {
                $productArray = Products::where('price_Product', '>', '20')->paginate(12); //lay product > 50$ va 1 trang 12 san pham
                return view($namePage, ['data' => $productArray])
                    ->with('i', (request()->input('page', 1) - 1 * 3));
            }
        }
        //product.blade.php
        if ($namePage == 'product') {


            $filter_product = $request['sort'];
            $filterByCol = $request['sortCol'];
            if (isset($search_product)) //search
            {

                $getHastag = HastagProduct::select('hastag_product')->distinct()->get();
                $getAllProduct = Products::where('name_Product', 'LIKE', "%$search_product%")->take(12)->get();
                return view($namePage, compact('getAllProduct', 'getHastag', 'search_product'));

            } else if (isset($filter_product)) //filter
            {

                if ($filter_product == 'price_asc') {
                    $getHastag = HastagProduct::select('hastag_product')->distinct()->take(20)->get();
                    $getAllProduct = Products::orderBy('price_Product', 'asc')->get();
                    return view('product', compact('getAllProduct', 'getHastag', 'filter_product'));

                } else if ($filter_product == 'price_desc') {

                    $getHastag = HastagProduct::select('hastag_product')->distinct()->take(20)->get();
                    $getAllProduct = Products::orderBy('price_Product', 'desc')->get();
                    return view('product', compact('getAllProduct', 'getHastag', 'filter_product'));

                } else if ($filter_product == '0den50') {

                    $getHastag = HastagProduct::select('hastag_product')->distinct()->get();
                    $getAllProduct = Products::whereBetween('price_Product', [0, 50])->take(20)->get();
                    return view('product', compact('getAllProduct', 'getHastag', 'filter_product'));

                } else if ($filter_product == '50den100') {

                    $getHastag = HastagProduct::select('hastag_product')->distinct()->get();
                    $getAllProduct = Products::whereBetween('price_Product', [50, 100])->take(20)->get();
                    return view('product', compact('getAllProduct', 'getHastag', 'filter_product'));

                } else if ($filter_product == '100den150') {

                    $getHastag = HastagProduct::select('hastag_product')->distinct()->get();
                    $getAllProduct = Products::whereBetween('price_Product', [100, 150])->take(20)->get();
                    return view('product', compact('getAllProduct', 'getHastag', 'filter_product'));

                } else if ($filter_product == '150den200') {

                    $getHastag = HastagProduct::select('hastag_product')->distinct()->get();
                    $getAllProduct = Products::whereBetween('price_Product', [150, 200])->take(20)->get();
                    return view('product', compact('getAllProduct', 'getHastag', 'filter_product'));

                } else if ($filter_product == 'lon200') {

                    $getHastag = HastagProduct::select('hastag_product')->distinct()->get();
                    $getAllProduct = Products::where('price_Product', '>', 200)->take(20)->get();
                    return view('product', compact('getAllProduct', 'getHastag', 'filter_product'));
                }

            } else if(isset($filterByCol))//filter by color
            {
                $getHastag = HastagProduct::select('hastag_product')->distinct()->get();
                $getAllProduct = Products::where('color_Product', '=', $filterByCol)->take(20)->get();
                return view('product', compact('getAllProduct', 'getHastag', 'filterByCol'));
            }else {
                if ($hastag_name == "") {

                    $getHastag = HastagProduct::select('hastag_product')->distinct()->get();
                    $getAllProduct = Products::paginate(12);
                    return view('product', compact('getHastag', 'getAllProduct'))
                        ->with('i', (request()->input('page', 1) - 1 * 3));

                } else {

                    $getHastag = HastagProduct::select('hastag_product')->distinct()->get();
                    $getAllProduct = Products::all();
                    $getProbyHastag = HastagProduct::where('hastag_product', '=', $hastag_name)->paginate(12);
                    return view('product', compact('getHastag', 'getProbyHastag', 'getAllProduct'))
                        ->with('i', (request()->input('page', 1) - 1 * 3));

                }
            }
        }

        if ($namePage == 'blog') {
            $search_blog = $request['search-blog'] ?? "";
            if ($search_blog != "") {
                $data1 = Blog::where('title_blog', 'LIKE', "%$search_blog%")->get();
                $hastag_Products = HastagProduct::all()->take(5);
                $products = Products::orderBy('id','desc')->get()->take(3);
                $hastag_blog = HastagBlog::all()->take(5);

                return view($namePage, compact('data1', 'search_blog'
                    ,'hastag_Products'
                    ,'products','hastag_blog'
                )) ;
            }

            else{
                $productArray1 = Blog::paginate(3);
                $hastag_Products = HastagProduct::all()->take(5);
                $products = Products::orderBy('id','desc')->get()->take(3);
                $hastag_blog = HastagBlog::all()->take(5);
                return view($namePage, ['data1' => $productArray1,
                    'hastag_Products'=>$hastag_Products,
                    'products'=>$products,
                    'hastag_blog'=>$hastag_blog
                ])
                    ->with('i',(request()->input('page',1) -1 * 3));
            }
        }
        else {
            //tìm product có hastag = man
            $data2 = Products::find(1)->hastagProductRelationship->toArray(); //trả về mảng của bảng Hastag Product
            return view($namePage, ['data2' => $data2]);
        }
    }
}
