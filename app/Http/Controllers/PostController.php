<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function updatePost(Post $post, Request $request){
        if(auth()->user()->id !== $post["user_id"]){
            return redirect("/");
        }
        $incomingFields = $request->validate([
            'title' => "required",
            "body" => "required",
            "ingeredients" => "required",
            "instruction" => "required"
        ]);
        $incomingFields["title"] = strip_tags($incomingFields["title"]);
        $incomingFields["body"] = strip_tags($incomingFields["body"]);
        $incomingFields["ingeredients"] = strip_tags($incomingFields["ingeredients"]);
        $incomingFields["instruction"] = strip_tags($incomingFields["instruction"]);

        $post->update($incomingFields);
        return redirect("/");
    }
    public function showEditScreen(Post $post){
        if(auth()->user()->id !== $post["user_id"]){
            return redirect("/");
        }
        return view('edit-post', ['post' => $post]);
    }
    public function create(Request $request){
        $incomingFields = $request->validate([
            'title' => "required",
            "body" => "required",
            "ingredients" => "required",
        ]);

        $incomingFields["title"] = strip_tags($incomingFields["title"]);
        $incomingFields["body"] = strip_tags($incomingFields["body"]);
        $incomingFields["ingeredients"] = strip_tags($incomingFields["ingeredients"]);
        $incomingFields["image"] = $request-file("image");
        $incomingFields["user_id"] = auth()->id();
        Post::create($incomingFields);
        return redirect("/");
    }
    public function deletePost(Post $post){
        if(auth()->user()->id === $post["user_id"]){
            $post->delete();
        }
            return redirect("/");

    }
}
