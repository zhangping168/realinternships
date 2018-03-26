@extends ('layouts.app')

@section('content')
@if(session()->has('message.level'))
<div class="alert alert-{{session('message.level')}}">
	{{ session('message.content') }}
</div>
@endif
<div class="card">	
	<h5 class="card-header">Upload Resume</h5>
	<div class="card-body">
		<form action="/upload" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group">
				
				<input type="file" id="resume" name="resume" class="form-control-file"/>
			</div>
			<button type="submit" class="btn btn-primary">Upload</button>
		</form>
	</div>

</div>
@endsection