@extends('layouts.app')

@section('content')
<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold">Leaderboard</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Try to search for a teacher by name</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <form action="{{ route('teachers', request()->query()) }}" class="d-flex" role="search">
          <input class="form-control me-2" type="search" name="q" value="" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
          </form>
      </div>
    </div>
</div>
<div class="px-4 p-5 my-5">
  @if($teachers->count())
    <div class="col-lg-6 mx-auto">
      @foreach ($teachers as $teacher)
    <div class="row justify-content-center">
      <div class="mb-4 border col-sm-8 row align-items-center">
          {{-- Like --}}

          <div class="pl-4"> <a href="" class="btn btn-link">{{ $teacher->name }}</a></div>

          {{-- Dislike --}}

      </div>
    </div>
      @endforeach
      <div class="d-flex justify-content-center">
        {{ $teachers->links() }}
      </div>

    </div>
  @else 
  <div class="col-lg-6 mx-auto">
    <div class="card w-75 mb-3">
      <div class="card-body">
        <h5 class="card-title">No Teacher aviablable!</h5>
      </div>
    </div>
  </div>
 @endif
</div>
@endsection