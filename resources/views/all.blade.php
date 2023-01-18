@extends('layout')

@section('title', 'All Posts')

@section('content')

<div class="grid-parent">
@forelse($posts as $post)

<div class="container">
    <div class="square">
        <img src="/images/{{ $post->image }}" class="mask">
        <div class="h1">{{ $post->title }}</div>
        <p class="truncate">{{ $post->description }}</p>  
        <div><a href="{{ route('posts.show', [$post]) }}" target="_" class="readmore glossy-button--green">Read More</a></div>
        <p class="author">by {{ $post->user->name }}</p>
    </div>
</div>

@empty
<h2>There are no posts yes... :\</h2>
@endforelse
</div>
@endsection
