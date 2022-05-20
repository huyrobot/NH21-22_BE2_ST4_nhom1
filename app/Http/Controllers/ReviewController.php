<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReviewProduct;
class ReviewController extends Controller
{
    public function getReView()
    {
        $reView = ReviewProduct::paginate(5);
        return view('boxReview.crudReview',compact('reView'))
        ->with('i',(request()->input('page',1) -1 * 5));
    }
    public function add()
    {
        return view('boxReview.addReView');
    }
    public function save(Request $request)
    {
       $user_id = $request->get('user_id');
       $product_id = $request->get('product_id');
       $comment_review = $request->get('comment_review');
       $rate_review = $request->get('rate_review');
    
       ReviewProduct::create([
           'user_id'=> $user_id,
           'product_id'=>$product_id,
           'comment_review'=> $comment_review,
           'rate_review'=>$rate_review,
       ]);

       return redirect()->route('boxReview.crudReview')
       ->with('thongbao','Them thanh cong!');
    }

    public function delete($user_id)
    {
        $value = ReviewProduct::findOrFail($user_id);
        $value->delete();
        return redirect()->route('boxReview.crudReview')
        ->with('thongbao','Xoa thanh cong!');
    }
    public function edit($user_id)
    {
        $value = ReviewProduct::findOrFail($user_id);
        return  view('/boxReview/editReView',['value'=>$value]);
    }
    public function update(Request $request,$user_id)
    {
        $value = ReviewProduct::findOrFail($user_id);
        $value->update([
            'product_id'=>$request->get('product_id'),
            'comment_review'=>$request->get('comment_review'),
            'rate_review'=>$request->get('rate_review'),
        ]);
        return redirect()->route('boxReview.crudReview')
        ->with('thongbao','Sua thanh cong!');
    }
}
