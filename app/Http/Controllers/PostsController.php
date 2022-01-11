<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        //dd($posts);
        return view("posts")->with("posts", $posts);
    }

    public function show(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        dd($post->title);
        //return $request->get("title") . " " . $id;
        dd($post->PostsController);
    }

}
