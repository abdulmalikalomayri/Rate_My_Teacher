@extends('layouts.app')

@section('content')
<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold">Leaderboard</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Try to search for a teacher by name</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
      </div>
    </div>
</div>
<div class="px-4 p-5 my-5">
    <div class="col-lg-6 mx-auto">
      <div class="card w-75 mb-3">
        <div class="card-body">
          <h5 class="card-title">Teacher name</h5>
          <p class="card-text">colleges</p>
          <a href="#" class="btn btn-primary">up vote</a>
          <a href="#" class="btn btn-primary">down vote</a>
        </div>
      </div>
    </div>
</div>
@endsection