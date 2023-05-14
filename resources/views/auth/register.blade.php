@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">

            <h5 class="card-title text-center mb-5 fw-light fs-5">Sign up</h5>
            <form action="{{ route('register') }}" method="post">
                @csrf
                
              <div class="form-floating mb-3">
                <input type="name" name="name" class="form-control" id="name" placeholder="name" value="{{ old('name')}}">
                <label for="name">Name</label>
                @error('name')
                <span class="alert alert-danger">{{ $message }}</span>
                @enderror
              </div>
                
              <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="email" placeholder="email" value="{{ old('email')}}">
                <label for="email">Email address</label>
                @error('email')
                <span class="alert alert-danger">{{ $message }}</span>
                @enderror
              </div>
                
              <div class="form-floating mb-3">
                <input type="username" name="username" class="form-control" id="username" placeholder="username" value="{{ old('username')}}">
                <label for="username">Username</label>
                @error('username')
                <span class="alert alert-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                <label for="password">Password</label>
                @error('password')
                <span class="alert alert-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="form-floating mb-3">
                <input type="password_confirmation" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Repeat your password">
                <label for="password_confirmation">Password confirmation</label>
                @error('password_confirmation')
                <span class="alert alert-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Sign up</button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <!-- ================================= -->

  <div class="container vh-100 login-body">
              <main class="form-signin text-center col-3">
              <form   action="{{ route('register') }}" method="post">
              @csrf
              <svg class="mb-4" xmlns="http://www.w3.org/2000/svg" width="72" height="57" viewBox="0 0 123.914 83">
                <g id="laravel-logo" transform="translate(-760 -554)">
                  <path id="Subtraction_1" data-name="Subtraction 1" d="M128.5,271a74.549,74.549,0,0,1-61.059-31.8,127.181,127.181,0,0,0,123.914-2.687,74.879,74.879,0,0,1-26.481,25.021A74.16,74.16,0,0,1,128.5,271Z" transform="translate(951.356 873.51) rotate(180)" fill="#060e16"/>
                  <g id="Group_1" data-name="Group 1" transform="translate(0.91)">
                    <path id="Polygon_1" data-name="Polygon 1" d="M21.5,0l6.88,13.171L43,15.661,32.632,26.291,34.788,41,21.5,34.4,8.212,41l2.156-14.709L0,15.661l14.62-2.49Z" transform="translate(800 554)" fill="#060e16"/>
                    <path id="Polygon_3" data-name="Polygon 3" d="M8.5,0l2.72,5.461L17,6.493,12.9,10.9l.852,6.1L8.5,14.263,3.247,17,4.1,10.9,0,6.493,5.78,5.461Z" transform="matrix(0.966, 0.259, -0.259, 0.966, 859.49, 584.09)" fill="#060e16"/>
                    <path id="Polygon_4" data-name="Polygon 4" d="M8.5,0l2.72,5.461L17,6.493,12.9,10.9l.852,6.1L8.5,14.263,3.247,17,4.1,10.9,0,6.493,5.78,5.461Z" transform="matrix(0.966, -0.259, 0.259, 0.966, 767.09, 588.49)" fill="#060e16"/>
                  </g>
                </g>
              </svg>
                <h1 class="h3 mb-3 fw-normal">sign in</h1>
                <!-- name -->
                <div class="form-floating mb-3">
                <input type="name" name="name" class="form-control" id="name" placeholder="name" value="{{ old('name')}}">
                <label for="name">Name</label>
                @error('name')
                <span class="alert alert-danger">{{ $message }}</span>
                @enderror
                </div>
                <!-- email -->
                <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="email" placeholder="email" value="{{ old('email')}}">
                <label for="email">Email address</label>
                @error('email')
                <span class="alert alert-danger">{{ $message }}</span>
                @enderror
                </div>
                <!-- usename -->
                <div class="form-floating mb-3">
                <input type="username" name="username" class="form-control" id="username" placeholder="username" value="{{ old('username')}}">
                <label for="username">Username</label>
                @error('username')
                <span class="alert alert-danger">{{ $message }}</span>
                @enderror
                </div>
                <!-- password -->
                <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                <label for="password">Password</label>
                @error('password')
                <span class="alert alert-danger">{{ $message }}</span>
                @enderror
              </div>
                <!-- password confirm -->
              <div class="form-floating mb-3">
                <input type="password_confirmation" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Repeat your password">
                <label for="password_confirmation">Password confirmation</label>
                @error('password_confirmation')
                <span class="alert alert-danger">{{ $message }}</span>
                @enderror
              </div>


                <button class="w-100 btn btn-lg btn-primary rounded-pill bg-forth" type="submit">Register</button>
                <p class="mt-5 mb-3 text-body-secondary fixed-bottom">&copy; 2017–2023</p>
              </form>
            </main>
            </div>

  <!-- ================================= -->
@endsection