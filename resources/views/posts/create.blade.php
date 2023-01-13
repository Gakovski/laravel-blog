@extends('layout')

@section('title', 'Create new post')

@section('content')
<h1>Create a New Blog Post</h1>

<form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
    @csrf
    <label>Title</label>
    <input class="@error('title') error-border @enderror" type="text" name="title" value="{{ old('title') }}">
    @error('title')
    <div class="error">
        {{ $message }}
    </div>
    @enderror

    <label>Description</label>
    <textarea class="@error('description') error-border @enderror" name="description"> {{ old('description') }}</textarea>
    @error('description')
    <div class="error">
        {{ $message }}
    </div>
    @enderror

    <label>Image:</label>
    <input type="file" name="image" placeholder="image">
    @error('image')
    <div class="error">
        {{ $message }}
    </div>
    @enderror


    <br>
    <button type="submit">Submit</button>
</form>

@endsection