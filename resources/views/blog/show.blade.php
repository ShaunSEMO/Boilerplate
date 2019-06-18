@extends('layouts.index')

@section('blog')

        <br>
        <small>{{ $post->date }}</small>
        <br>
        <img style="width:50%;" class="img-fluid" src="{{ asset($post->image) }}" alt="Post header image">
        <h1>{{ $post->title }}</h1>
        <br>
        <p>{{ $post->body }}</p>

@endsection
