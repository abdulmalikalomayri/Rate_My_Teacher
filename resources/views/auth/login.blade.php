@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">

            <h5 class="card-title text-center mb-5 fw-light fs-5">Log in</h5>
            <form action="{{ route('login') }}" method="post">
                @csrf
              <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                <label for="email">Email address</label>
                @error('email')
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

              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                <label class="form-check-label" for="remember">
                  Remember me
                </label>
              </div>

              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Log in</button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection