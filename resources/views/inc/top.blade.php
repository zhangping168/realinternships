<div class="row mb-2">
        @foreach($posts as $post )

        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">Business</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">{{$post->title}}</a>
              </h3>

              <div class="mb-1 text-muted"><i class="far fa-calendar fa-lg"></i><span class="ml-2">{{$post->created_at->diffForHumans()}}</span></div>
              <p class="card-text mb-auto"><i class="fas fa-globe fa-lg"></i><span class="ml-2">{{$post->company}}</span></p>
              <p><i class="fas fa-map-marker-alt fa-lg"></i><span class="ml-2">{{$post->location}}</span></p>
              <a href="#">View details</a>
            </div>
            
          </div>
        </div>

        @endforeach
        

        
        
</div>

 <div class="card text-center">
  <div class="card-header font-weight-bold">
    How to apply
  </div>
  <div class="card-body">
    <h5 class="card-title">Register your account and it is Free!</h5>
    <p class="card-text">Let us make it easier for you. Sign up for the favorite internship, then upload your resume so our local agencies can take care of the rest for you.<br/> Plus you can get job alerts delivered to your inbox. What are you waiting for?</p>
    <a href="/register" class="btn btn-lg btn-primary">Create an Account</a>
  </div>
  
</div>

