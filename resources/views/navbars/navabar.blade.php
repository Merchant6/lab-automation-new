
<nav class="navbar col-lg-12 col-12 p-0 d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="{{route('dashboard')}}"><img src="{{asset('/theme/images/logo.svg')}}" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="{{route('dashboard')}}"><img src="{{asset('/theme/images/logo-mini.svg')}}" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-search d-none d-lg-block w-100">
            <form action="{{route('search')}}" method="POST">
              @csrf
              <div class="input-group mt-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="search">
                    <i class="mdi mdi-magnify"></i>
                  </span>
                </div>
                <input type="search" name="search" class="form-control" placeholder="Type something to search" aria-label="search" aria-describedby="search" value="{{$searchValue}}" >
                <button type="submit" class="border-0" style="background-color:#ececec">Search</button>
              </div>
           </form>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          
          <li class="nav-item nav-profile dropdown">
            <span class="text-capitalize">{{Auth::user()->username}}</span>
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              
              <span class="nav-profile-name"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                Profile
                
              </a>

              <form method="GET" action="{{route('signout')}}">
                <button class="dropdown-item">
                  <i class="mdi mdi-logout text-primary"></i>
                  Logout
                </button>
              </form>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>




    
    </nav>