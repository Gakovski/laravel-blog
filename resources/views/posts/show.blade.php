@extends('layout')

@section('title', $post->title)

@section('content')
<div class="post-item">
    <div class="post-content">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->description }}</p>
        <div class="inline-flex-parent">
            <div>
                <button class="edit" type="submit"><a href="{{ route('posts.edit', [$post]) }}">Edit post</a></button>
            </div>
            <div>
                <form method="POST" action="{{ route('posts.destroy', [$post]) }}">
                    @csrf
                    @method('DELETE')
                    <button class="delete" type="submit">Delete post</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection