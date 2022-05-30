<?php

namespace App\Http\Controllers;

use App\Http\Services\CommentService;
use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
    protected $commentService;
    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;
    }
    public function send_comment(Request $request)
    {
        $prod_id = $request->prod_id;
        $comment_email = $request->comment_email;
        $comment_content = $request->comment_content;

        $comment = new Comment();
        $comment->content_cmt = $comment_content;
        $comment->email_user = $comment_email;
        $comment->prod_id = $prod_id;
        $comment->save();
    }

    public function load_comment(Request $request)
    {

       $prod_id = $request->prod_id;
       $comment = Comment::where('prod_id',$prod_id)->take(10)->get();

       $output = '';
       foreach($comment as $key =>$value){
           $output .= '<div class="flex-w flex-t p-b-68">
           <div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
               <img src="'.asset("images/avatar-01.png").'" alt="AVATAR">
           </div>

           <div class="size-207">
               <div class="flex-w flex-sb-m p-b-17">
               <span class="mtext-107 cl2 p-r-20 text-success font-weight-bold">
                  '.$value->email_user.'
               </span>
               </div>
               <p class="stext-102 cl6">
               '.$value->created_at.'
           </p>
               <p class="stext-102 cl6">
                   '.$value->content_cmt.'
               </p>
           </div>
       </div>';
       }
       echo $output;
    }
    public function showListComment(){
        return view('admin.listmenu.listComment',[
            'title' => 'List Comment',
            'title2' => 'List',
            'comment' => $this->commentService->getAll(),
        ]);
    }
    public function destroy($id)
    {
        $comment = Comment::find($id);

        $comment->delete();
        Session::flash('success','Comment deleted');

        return redirect()->back();
    }
}
