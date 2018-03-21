@extends('layouts.app')

@section('content')

 @if($post)
 <!-- flash message-->
 @if(session()->has('message.level'))

 <div class="alert alert-{{session('message.level')}}" role-alert>
 	{!! session('message.content') !!}
 </div>
 @endif
 <!-- flash message ends-->


 	<div class="card">
	  <h5 class="card-header">{{$post->title}} <a href="/posts/save/{{$post->id}}" class="btn btn-outline-dark ml-5 p-2" id="save_post_btn">
	  @if(Auth::check())
	  	
		<i class="fa-heart fa-lg pr-2 text-danger {!! \App\User_Post::where('post_id',$post->id)->where('user_id',Auth::id())->count() == 1 ? 'fas' : 'far' !!}"></i>

		{!! \App\User_Post::where('post_id',$post->id)->where('user_id',Auth::id())->count() == 1 ? 'Already Saved' : 'Save this job' !!}
	  @else
	  	<i class="far fa-heart fa-lg pr-2 text-danger"></i>Save this job
	  @endif
	  	

	  </a></h5>
	  <div class="card-body">
	    <h5 class="card-title">{{$post->title}}</h5>
	    <p class="card-text">{{$post->body}}</p>
	    <a href="#" class="btn btn-primary" id="applyBtn">Apply Now</a>
	  </div>
	</div>
 @endif
 
@endsection

