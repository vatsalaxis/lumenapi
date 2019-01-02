<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    // Get all existing posts
    public function allPost ()
    {

       $post = Post::all();
       return response()->json($post);

    }

    // Create new post
    public function createPost (Request $request)
    {

        $post = Post::create($request->all());
        return response()->json($post);

    }

    // Update an existing post
    public function updatePost (Request $request, $id)
    {

       $post = Post::find($id);
       $post->title = $request->input('title');
       $post->body = $request->input('body');
       $post-save();
       return response()->json($post);

    }

    // Delete an existing post
    public function deletePost ($id)
    {

       $post = Post::find($id);
       $post-delete();
       return response()->json("Post had been successfully deleted");

    }

    
}