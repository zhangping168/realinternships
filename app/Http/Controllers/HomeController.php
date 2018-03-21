<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post as Post;
use App\User_Post as Saved;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id','desc')->take(4)->get();
        
        return view('index')->with('posts', $posts);
    }
    public function dashboard(){
        if(Auth::check()){
            $id = Auth::getUser()->id;
            $post_ids = Saved::where('user_id',$id)->pluck('post_id')->all();
            
            $posts = Post::whereIn('id',$post_ids)->get();
            
             
        }

       
        return view('home')->with('posts',$posts);
    }
}
