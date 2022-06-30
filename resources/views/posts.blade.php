@extends('layouts.main')
@section('container')
    <!-- ========== Start Section ========== -->
    @foreach ($posts as $post )
    <article class="mb-5">
    <h2>
        <a href="/posts/{{ $post["slug"] }}"> {{ $post["title"] }}</h2></a>
    <h6>By: {{ $post["author"] }}</h6>
    <p>{{ $post["body"] }}</p> 
    </article>
    @endforeach
    <!-- ========== End Section ========== -->
@endsection