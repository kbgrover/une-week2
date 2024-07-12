@extends('layouts.app')

@section('content')
    <h1>My Post Details</h1>
    <ul>
        <li>ID: {{ $post->id }}</li>
        <li>Title: {{ $post->title }}</li>
        <li>Content: {{ $post->content }}</li>
    </ul>
@endsection