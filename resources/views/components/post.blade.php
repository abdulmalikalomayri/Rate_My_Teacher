@props(['post' => $post])

<div class="mb-4">
    <a href="{{ route('users.posts', $post->user) }}" class="font-bold">{{ $post->user->name }}</a> <span class="text-gray-600 text-sm">{{ $post->created_at->diffForHumans() }}</span>

    <p class="mb-2">{{ $post->body }}</p>

    @can('delete', $post)
        <form action="{{ route('posts.destroy', $post) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-blue-500">Delete</button>
        </form>
        <form action="{{ route('posts.edit', $post) }}" method="post">
            @csrf
            @method('PUT')
            <button type="submit" class="text-blue-500">Edit</button>
        </form>
    @endcan

    <div class="flex items-center">
        @auth
            @if (!$post->likedBy(auth()->user()))
                <form action="{{ route('posts.likes', $post) }}" method="post" class="mr-1">
                    @csrf
                    <button type="submit" class="text-blue-500">Like</button>
                </form>
            @else
                <form action="{{ route('posts.likes', $post) }}" method="post" class="mr-1">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-blue-500">Unlike</button>
                </form>
            @endif
        @endauth
                {{-- Like count --}}
        <span>{{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }}</span>
    </div>

    <div class="flex items-center">
        @auth
            @if (!$post->dislikedBy(auth()->user()))
                <form action="{{ route('posts.dislikes', $post) }}" method="post" class="mr-1">
                    @csrf
                    <button type="submit" class="text-blue-500">Dislike</button>
                </form>
            @else
                <form action="{{ route('posts.dislikes', $post) }}" method="post" class="mr-1">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-blue-500">UnDislike</button>
                </form>
            @endif
        @endauth
                {{-- Dislike count --}}
        <span>{{ $post->dislikes->count() }} {{ Str::plural('dislike', $post->dislikes->count()) }}</span>

        <span>{{ $post->likes->count() - $post->dislikes->count()}} </span>
    </div>
</div>