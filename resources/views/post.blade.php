@extends('layouts.main')
@section('container')
<h2>{{ $post["title"] }}</h2>
<h6>{{ $post["author"] }}</h6>
<p>{{ $post["body"] }}</p>

<a href="/blog">Back To Posts</a>
@endsection