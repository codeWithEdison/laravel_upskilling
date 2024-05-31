
@extends('layout')
@section('content')
<h1>this our posts</h1>
@if (!$posts)
<p>no post available</p>

@endif
    

@foreach($posts as $post)
<h2><a href="/posts/{{$post['id']}}">{{$post['title']  }}</a></h2>
{{-- <p>{{  $post['content']}}  </p> --}}
<b> by :{{ $post['author']}}  </b>
<i>   {{ $post['date']}}  </i>

<hr>

@endforeach
@endsection