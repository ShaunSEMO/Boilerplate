@extends('layouts.index')

@section('home')

<div data-aos="zoom-in">
    @include('home.sections.about-sec')
</div>

<br>

<div >
    @include('home.sections.blog-sec')
</div>

<br>
@include('home.sections.gallery-sec')
<br>
@include('following.following')
<br>
@include('home.sections.shop-sec')
<br>

@endsection
