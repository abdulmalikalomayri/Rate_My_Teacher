<nav class="container mar-nav navbar navbar-expand-lg navbar-light bg-main rounded-pill mt-3">
    <div class="container-fluid">
      <!-- <a class="navbar-brand" href="{{ route('home')}}">{{ config('app.name')}}</a> -->
      <a class="navbar-brand" href="{{ route('home')}}">
      <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="20" viewBox="0 0 123.914 83">
        <g id="laravel-logo" transform="translate(-760 -554)">
          <path id="Subtraction_1" data-name="Subtraction 1" d="M128.5,271a74.549,74.549,0,0,1-61.059-31.8,127.181,127.181,0,0,0,123.914-2.687,74.879,74.879,0,0,1-26.481,25.021A74.16,74.16,0,0,1,128.5,271Z" transform="translate(951.356 873.51) rotate(180)" fill="#060e16"/>
          <g id="Group_1" data-name="Group 1" transform="translate(0.91)">
            <path id="Polygon_1" data-name="Polygon 1" d="M21.5,0l6.88,13.171L43,15.661,32.632,26.291,34.788,41,21.5,34.4,8.212,41l2.156-14.709L0,15.661l14.62-2.49Z" transform="translate(800 554)" fill="#060e16"/>
            <path id="Polygon_3" data-name="Polygon 3" d="M8.5,0l2.72,5.461L17,6.493,12.9,10.9l.852,6.1L8.5,14.263,3.247,17,4.1,10.9,0,6.493,5.78,5.461Z" transform="matrix(0.966, 0.259, -0.259, 0.966, 859.49, 584.09)" fill="#060e16"/>
            <path id="Polygon_4" data-name="Polygon 4" d="M8.5,0l2.72,5.461L17,6.493,12.9,10.9l.852,6.1L8.5,14.263,3.247,17,4.1,10.9,0,6.493,5.78,5.461Z" transform="matrix(0.966, -0.259, 0.259, 0.966, 767.09, 588.49)" fill="#060e16"/>
          </g>
        </g>
      </svg>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link color-forth" href="{{ route('teachers')}}">Teachers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link color-forth" href="{{ route('teachers.leaderboard')}}">LeaderBoard</a>
          </li>
        
        </ul>
          @guest
          <a class="nav-link" href="{{ route('login')}}"><button class=" btn btn-lg btn-primary no-bg border border-0 p-0" type="submit"><p class="m-0 color-forth fs-6">Login</p></button></a>
          
      
          <a class="nav-link" href="{{ route('register')}}"><button class=" btn btn-lg btn-primary bg-forth border border-0 rounded-pill p-0" type="submit"><p class="p-1 px-3 m-0 fs-6 mx-2">Register</p></button></a>   
          @endguest
          @auth
          <span class="nav-item me-1">Welcome,</span> 
           <span class="nav-item">{{ auth()->user()->name;}}</span>   
           
           <form action="{{ route('logout')}}" method="post">
            @csrf
            <button class=" btn btn-lg btn-primary no-bg border border-0 rounded-pill p-0 mx-2" type="submit"><p class="p-1 m-0 color-forth fs-6 mx-2">Logout</p></button>
            <!-- <button type="submit" class="btn btn-link">Logout</button>  -->
          </form>
          @endauth
 
          </ul>
      </div>
    </div>
  </nav>