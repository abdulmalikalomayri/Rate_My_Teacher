<nav class="container navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home')}}">{{ config('app.name')}}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('teachers')}}">Search Teachers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('teachers.leaderboard')}}">LeaderBoard</a>
          </li>
        
        </ul>
          @guest
          <a class="nav-link" href="{{ route('login')}}">Login</a>
      
          <a class="nav-link" href="{{ route('register')}}">Register</a>   
          @endguest
          @auth
           <span class="nav-item">{{ auth()->user()->name;}}</span>   
           
           <form action="{{ route('logout')}}" method="post">
            @csrf
            <button type="submit" class="btn btn-link">Logout</button> 
          </form>
          @endauth
 
          </ul>
      </div>
    </div>
  </nav>