@extends('layouts.app')

@section('content')

    <div class="container vh-100 login-body">
      <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
              <div class="card-body p-4 p-sm-5">
                <h5 class="card-title text-center mb-5 fw-light fs-5">Sign In</h5>
                <form  action="{{ route('login') }}" method="post">
                  @csrf
                  <div class="form-floating mb-4">
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                    
                  </div>
                  <div class="form-floating mb-4 mt-4">
                  @error('email')
                    <span class="alert alert-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="form-floating mb-4 mt-4">
                    <input type="password" name="password" class="form-control my-2" id="password" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                  </div>
                  <div class="form-floating mb-4 mt-4">
                    @error('password')
                  <span class="alert alert-danger">{{ $message }}</span>
                  @enderror
                </div>  
                  <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                    <label class="form-check-label" for="rememberPasswordCheck">
                      Remember password
                    </label>
                  </div>
                  <div class="d-grid">
                    <button class="w-100 btn btn-lg btn-primary rounded-pill bg-forth" type="submit">Sign in</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection