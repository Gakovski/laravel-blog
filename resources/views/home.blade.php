@extends('layout')

@section('title', 'Home')

@section('content')

<div class="grid-parent">
@forelse($posts as $post)
    <div class="post-item">
        <div class="post-content">
            <h2><a href="{{ route('posts.show', [$post]) }}">{{ $post->title }}</a></h2>
            <p>{{ $post->description }}</p>
        </div>
    </div>
@empty
<h2>There are no posts yes... :\</h2>
@endforelse
</div>
@endsection