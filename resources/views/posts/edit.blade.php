@extends('layout')

@section('title', 'Update post'. $post->title)

@section('content')
<h1>Update Post {{ $post->title }}</h1>

<form method="POST" action="{{ route('posts.update', [$post]) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label>Name</label>
    <input class="@error('title') error-border @enderror" type="text" name="title" value="{{ old('title', $post->title) }}">
    @error('title')
    <div class="error">
        {{ $message }}
    </div>
    @enderror

    <label>Description</label>
    <textarea class="@error('description') error-border @enderror" name="description">{{ old('description', $post->description) }}></textarea>
    @error('description')
    <div class="error">
        {{ $message }}
    </div>
    @enderror

    <label>Image:</label>
    <input type="file" name="image" class="form-control" placeholder="image">
    @error('image')
    <div class="error">
        {{ $message }}
    </div>
    @enderror

    <button type="submit">Update</button>
</form>

@endsection