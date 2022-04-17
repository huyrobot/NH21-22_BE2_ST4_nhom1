<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function viewFunction ($namePage = 'index') {
        if($namePage == 'index'){
            $productArray = Products::all();
            return view($namePage,['data'=>$productArray]);
        }
        else{
            //tìm product có hastag = man
            $data2 = Products::find(2)->productsRelationship->toArray();
            return view($namePage,['data2'=>$data2]);
        }
    }
}
