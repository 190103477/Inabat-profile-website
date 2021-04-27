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
}