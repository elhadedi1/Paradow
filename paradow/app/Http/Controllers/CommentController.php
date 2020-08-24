<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Category;
use App\About;
use App\profile;
use App\AboutTitle;
use App\Http\Requests\UpdateCommentRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use DB;
use Auth;
use Session;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $this->validate(request(), [
            'comment_body'  => 'required',
          ],
    
          [
            'comment_body.required'  => 'Enter Your Comment',
          ]);
        $comment = new Comment;
        $comment->body = $request->get('comment_body');
        $comment->user_id= auth::user()->id;
        $comment->user_name = Auth::user()->name;
        $post = Category::find($request->get('post_id'));
        $post->comments()->save($comment);

        return back();
    }

    public function update($id,Request $request){
        $this->validate(request(),[
            'body'    => 'required|min:2|max:450',
            

        ]);
        $comment=Comment::find($id);
        $comment->body=$request->body;
        $comment->save();
        
        // $request->validated();
        // $comment=Comment::find($id);
        // $comment->body=$request->body;
        // $comment->save();
        Session::flash('save','your comment updated successfully');

        return back();

    }

    public function edit($id){
         
        $comment= Comment::find($id);
        return back();
    }

    public function delete($id){
          
        $comment=Comment::find($id);
        $comment->delete();
        return back();
        Session::flash('save','Done, Comment Deleted Successfully');
    }
}
