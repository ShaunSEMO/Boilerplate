@extends('layouts.index')

@section('about')

    <div id="about-sec" data-aos="zoom-in" class="container">
        <br>
        <h1 id="greeting">Hey, I'm Tebatso Valrey Nkoana.</h1>
        <br>
        @foreach($abouts as $about)
        <br>
        <img id="about-img" class="img-fluid" src="{{ asset($about->image) }}" alt="Post header image">
        <br>
        <br>
        <p id="about-p">{{ $about->body }}</p>
        <br>
        @endforeach

        @include('following.following')

        <br>
        <br>
        <a href="{{ url('/') }}" class="sitebtn btn btn-dark"><i class="fas fa-backward"></i></a>
    </div>
@endsection
