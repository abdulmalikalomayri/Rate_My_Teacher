@props(['teacher' => $teacher])

<div class="row justify-content-center  my-2">
<div class="mb-4 teacher-card col-sm-12 row align-items-center">
    {{-- Like --}}
    @auth
      {{-- user have not like the teacher before? --}}
      @if(!$teacher->likedBy(auth()->user()))
        <form class="" action="{{ route('teachers.likes', $teacher)}}" method="post">
            @csrf
            <button type="submit" class="btn btn-link">Like</button>
        </form>
      @else
        <form action="{{ route('teachers.likes', $teacher)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-link">Unlike</button>
        </form>
      @endif
    @endauth
    <div class="row">
      <div class="col-1 p-0 m-0 text-center">
        <p class="p-0 m-0">{{ $teacher->likes->count() - $teacher->dislikes->count() }}</p>
      </div>
      <div class="col p-0 m-0 d-flex justify-content-start">
        <p class="p-0 m-0"><a href="" class="btn btn-link color-black fs-6  p-0 m-0">{{ $teacher->name }}</a></p>
      </div>
    </div>

    {{-- Dislike --}}
    @auth
      {{-- user have not like the teacher before? --}}
      @if(!$teacher->dislikedBy(auth()->user()))
        <form action="{{ route('teachers.dislikes', $teacher)}}" method="post">
            @csrf
            <button type="submit" class="btn btn-link">Dislikes</button>
        </form>
      @else
        <form action="{{ route('teachers.dislikes', $teacher)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-link">Undislikes</button>
        </form>
      @endif  

    @endauth

</div>
</div>