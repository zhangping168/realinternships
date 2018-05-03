<!-- search form starts -->
<div class="card bg-light text-dark mb-2 search-form p-5">
	<div class="card-body">
		<h2 class="card-title text-center font-weight-bold text-white">Search For More</h2>
 		<form action="/posts" method="get" class="m-2">
 			{!! csrf_field() !!}
	 		
	 		<div class="form-row">

	 			<div class="form-group col-md-10">
	 				<input type="text" name="title" class="form-control" placeholder="Search for job title" value="{{ isset($title) ? $title :''}}"> 

	 			</div>
	 			<!--<div class="form-group col-md-5">
	 				<input type="text" name="location" class="form-control" placeholder="Location" value=" {{ isset($location) ? $location : ''}}">
	 			</div>
				-->
	 			<div class="form-group col-md-2">
	 				<button type="submit" class="btn btn-info">Search</button>
	 			</div>
	 			
	 		</div>
 		</form>
<!-- search form end -->
	</div>
</div>

<style>
	.search-form{
		background:  url("/img/searchForm_bg.jpg");
	}
</style>