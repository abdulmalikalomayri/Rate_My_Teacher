@extends('layouts.app')

@section('content')
<div class="container">
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
  </div>
@endsection