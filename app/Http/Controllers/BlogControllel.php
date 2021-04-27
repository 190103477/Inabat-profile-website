<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogControllel extends Controller
{
    //
    public function index(){
        $posts = Post::all();
        return view('blog.index')->with(['posts'=>$posts]);   //laboratory work 5
    
}
public function store(Request $request){
    Post::create([
        'title' => $request->title,
        'body' => $request->body                              //laboratory work 5
    ]);

    return back();
}

public function get_post($id)
    {
       $post = Post::find($id);

       if($post == null) 
       return response(['message' => 'post not found', 404]);
       else return view('blog.detail')->with(['post' => $post]);
    }
}