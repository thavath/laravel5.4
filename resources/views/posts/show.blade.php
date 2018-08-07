@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-info">Go Back</a>
    <h1>{{ $post->title}}</h1>
    <div>
        <p>{{ $post->body }}</p>
    </div>
    <hr>
    <small>Written on: {{ $post->created_at }}</small>
@endsection