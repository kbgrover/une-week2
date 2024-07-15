@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <h4>ID: {{ $post->id }}</h4>
    <p>{{ $post->content }}</p>

    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
        @csrf 
        @method('DELETE')
        <button type="submit" class="btn btn-primary">Delete Post</button>
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit this Post</a>
    </form>

    <br>
    <a href="{{ route('posts.index') }}" class="btn btn-primary">Back to Posts</a>
@endsection