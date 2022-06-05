<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('admin.posts.index',['posts'=>$posts]);
    }
    public function show(Post $post){//show(Post $post) is going to receive an id of the post and  will match the post
      
        return view('blog-post',['post'=>$post]);
    }
    public function create(){
      
        return view('admin.posts.create');
    }
    public function store(Request $request){
        $inputs = request()->validate([
            'title'=> 'required|min:8|max:255',
            'post_image'=>'mimes:jpeg,png',
            'body'=>'required'
        ]);
        if(request('post_image')){
            $inputs['post_image']=request('post_image')->store('images');//store() function creates a folder in local computer  to store the image
        }
        //dd($request->post_image);
        auth()->user()->post()->create($inputs);
        return back();
    }
}
