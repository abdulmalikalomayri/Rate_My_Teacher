@props(['teacher' => $teacher])

<div class="row justify-content-center">
<div class="mb-4 border col-sm-8 row align-items-center">
    {{-- Like --}}
    @auth
      {{-- user have not like the teacher before? --}}
      @if(!$teacher->likedBy(auth()->user()))
        <form action="{{ route('teachers.likes', $teacher)}}" method="post">
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
    <div class="pl-4">{{ $teacher->likes->count() - $teacher->dislikes->count() }}  <a href="" class="btn btn-link">{{ $teacher->name }}</a></div>

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