@extends('layouts.app')

@section('content')
    <h1>Post Detail Page</h1>
    <h4><a href="/posts/create">Create Post</a></h4>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>posted on: {{$post->created_at}}</small>
            </div>
        @endforeach
        {{-- to show link as page next style. --}}
        {{ $posts->links()}} 

    @else
        <h2>No any Post here...!</h2>
    @endif
@endsection