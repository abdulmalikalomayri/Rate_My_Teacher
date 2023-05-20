@extends('layouts.app')

@section('content')
<div class="px-4 py-5 mt-5 text-center ">
  <!-- <h1 class="display-5 fw-bold">Home</h1> -->
  <div class="col-lg-6 mx-auto">
    <h3 class="mb-4 h3">Try to search for a teacher by name</h3>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
      <form action="{{ route('teachers', request()->query()) }}" class="d-flex w-100" role="search">
          <input class="form-control w-100 me-2" type="search" name="q" value="" placeholder="Teacher name" aria-label="Search">
          <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
          <button class=" btn btn-lg btn-primary bg-forth rounded-pill p-0 mx-2" type="submit"><p class="p-1 m-0 fs-4 mx-4">Search</p></button>
      </form>
    </div>
  </div>
</div>
<div class="px-4 p-5 mt-2 ">
  @if($teachers->count())
    <div class="col-lg-6 mx-auto ">
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