<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post as Post;
use App\Category as Category;
use App\User_Post as User_Post;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = $request->input('title');
        //$location = $request->input('location');

        $posts = Post::where('title','like', '%' .$title. '%')
                //->where('location','like','%'.$location.'%')
                ->paginate(10);
        
        $categories = Category::all();

        return view('posts.index',compact('posts','title','categories'));
    }

   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function search(Request $request)
    {
        dd($request->input('title'));

        return view('posts.search');
    }


    public function store(Request $request)
    {

    }


    public function save(Request $request, $post_id)
    {
        if(Auth::check()){
            
            $saved_post = User_Post::firstOrCreate(['post_id'=>$post_id,'user_id'=>Auth::getUser()->id]);
            $saved_post->save();

            if($saved_post->wasRecentlyCreated){
                $request->session()->flash('message.level','success');
                $request->session()->flash('message.content','Post was saved successfully!');
            }else{
                $request->session()->flash('message.level','danger');
                $request->session()->flash('message.content','Post has already been saved!');
            }

            return back();

        }else{
            return redirect('/login');
        }
        
    }

}
