@extends('layout')

@section('title', $post->title)

@section('content')
<div class="post-item">
    <div class="post-content">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->description }}</p>
        <div class="buttons">
            <div class="action_btn">
                <form method="POST" action="{{ route('posts.destroy', [$post]) }}">
                    <button class="action_btn edit" type="submit"><a href="{{ route('posts.edit', [$post]) }}">Edit post</a></button>
                    @csrf
                    @method('DELETE')
                    <button class="action_btn delete" type="submit">Delete post</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection