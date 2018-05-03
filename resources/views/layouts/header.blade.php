<header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          
          <div class="col-8 text-center">
            <a class="blog-header-logo text-dark" href="/">BETTER INTERNSHIPS</a>
          </div>

          <div class="col-4 text-center">
            @if(Auth::guest())
            	<a class="btn btn-link" href="/login"><i class="fas fa-user-circle fa-3x"></i><br/><span class="font-weight-bold">My Account</span></a>
            @endif

            @if(Auth::check())
            	
              <!-- dropdown menu -->
              <div class="dropdown">
                <button class="btn btn-lg btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Welcome, <span class="font-weight-bold">{{Auth::getUser()->name}}</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="/dashboard">My Saved Jobs</a>
                  <a class="dropdown-item" href="/account">My Account</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="/logout">Sign out</a>
                </div>
              </div>
              <!-- dropdown menu ends -->
                
            @endif

          </div>

          
        </div>
</header>