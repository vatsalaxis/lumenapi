<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

     // Create new comment
    public function createComment (Request $request)
    {

        $comment = Comment::create($request->all());
        return response()->json($comment);

    }

    // Update an existing comment
    public function updateComment  (Request $request)
    {

       $comment = Comment::find($request->input('id'));
       $comment->body = $request->input('body');
       $comment->save();
       return response()->json($comment);

    }

    // Delete an existing comment
    public function deleteComment  ($id)
    {

       $comment = Comment::find($id);
       $comment->delete();
       return response()->json("Comment has been successfully deleted");

    }


}