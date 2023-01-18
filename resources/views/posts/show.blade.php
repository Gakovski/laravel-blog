@extends('layout')

@section('title', $post->title)

@section('content')
<div class="post-item glossy-button">
    <div>
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->description }}</p>
        <img src="/images/{{ $post->image }}" width="500px">
        <br>
        <div class="edit-delete-inline">
            @can('update', $post)
            <div>
                <a class="glossy-button glossy-button--gold" href="{{ route('posts.edit', [$post]) }}">Edit post</a>
            </div>
            @endcan
            @can('delete', $post)
            <div>
                <form method="POST" action="{{ route('posts.destroy', [$post]) }}">
                    @csrf
                    @method('DELETE')
                    <button class="glossy-button glossy-button--red" type="submit">Delete post</button>
                </form>
            </div>
            @endcan
        </div>
        <br>
        <small>Posted by <b>{{ $post->user->name }}</b></small>
    </div>
</div>
@endsection
