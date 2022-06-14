<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
public function index(){
    $posts=Post::all();

    return view ('post.index',compact('posts'));
}

public function create(){
    return view ('post.create');
}

public function store(){

    request()->validate([
        'title'=>'required',
        'content'=>'required',
    ]);

  Post::create([
    'title'=>request('title'),
    'content'=>request('content'),
  ]);
  return redirect('/posts');


}

public function edit (Post $post){
    return view ('post.edit',compact('post'));
}

public function update (Post $post){

    request()->validate([
        'title'=>'required',
        'content'=>'required',
    ]);
  $post->update([
     'title'=>request('title'),
     'content'=>request('content'),
  ]);
  return redirect('/posts');
}


public function destroy(Post $post){
    $post->delete();
    return redirect('/posts');

}
public function getPost(){

    $post=Post::all();
    return $post;
   }

}
