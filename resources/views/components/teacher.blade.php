@props(['teacher' => $teacher])

<div class="mb-4">
    <a href="" class="btn btn-link">{{ $teacher->name }}</a>


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
    <span>{{ $teacher->likes->count() }} {{ Str::plural('like', $teacher->likes->count()) }}</span>

    {{-- Dislike --}}
    @auth
      {{-- user have not like the teacher before? --}}
      @if(!$teacher->likedBy(auth()->user()))
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
      <span>{{ $teacher->dislikes->count() }} {{ Str::plural('like', $teacher->dislikes->count()) }}</span>

    @endauth

</div>