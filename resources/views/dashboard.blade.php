@extends('layouts.app')

@section('content')
<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold">Home</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Try to search for a teacher by name</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <form action="{{ route('teachers', request()->query()) }}" class="d-flex" role="search">
            <input class="form-control me-2" type="search" name="q" value="" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
</div>
<div class="px-4 p-5 my-5">
  @if($teachers->count())
    <div class="col-lg-6 mx-auto">
      @foreach ($teachers as $teacher)
      <x-teacher :teacher="$teacher" />

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