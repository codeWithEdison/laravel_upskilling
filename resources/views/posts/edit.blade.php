@extends('layout')

@section('content')
    <h1>Edit Post</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Title</label>
        <input type="text" name="title" value="{{ $post->title }}" required>
        <label>Author</label>
        <input type="text" name="author" value="{{ $post->author }}" required>
        <label>Content</label>
        <textarea name="content" required>{{ $post->content }}</textarea>
        <button type="submit">Update</button>
    </form>
@endsection
