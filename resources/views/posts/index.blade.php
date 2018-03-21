 @extends('layouts.app')

@section('content')

@include('inc.form_search')

<div class="row">
	<div class="col-md-8 col-sm-12">
		<div class="my-3 p-3 bg-white rounded box-shadow">
		<h5 class="border-bottom border-gray pb-2 mb-0">Recent updates</h5>
			@foreach($posts as $post)
		<div class="media text-muted pt-3">
          <span class="badge badge-success">New</span>
          <p class="media-body pb-3 ml-1 mb-0  lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark"><a href="/posts/{{$post->id}}">{{$post->title}}</a></strong>{{$post->location}} <br/>Salary Range: 1000-2000/Month
            <br/>Posted: {{$post->created_at->diffForHumans()}}
          </p>

        </div>
			@endforeach
		
	</div>

{{$posts->appends(['title'=>$title])->links()}}
	</div>
	<div class="col-md-4 d-none d-md-block">
		@include('inc.categories')
	</div>
</div>

@endsection