@extends('layouts.index')

@section('blog')

    <div class="container">
        <div class="container">
            <div class="row">
                @foreach($posts as $post)
                <div data-aos="fade-right" class="col-lg-4 col-md-4">
                    <div class="container each-post-small">
                            <div id="date-div">
                                <small id="post-date">{{ \Carbon\Carbon::parse($post->date)->format('d - m - Y')}}</small>
                            </div>
                            <br>
                            <img class="img-fluid" src="{{ asset($post->image) }}" alt="Post header image">
                            <br>
                            <br>
                            <h3>{!! $post->title !!}</h3>
                            <p>{!! str_limit($post->body, $limit = 150, $end = '...') !!}</p>
                            <a href="blog/{{ $post->id }}">Read More</a>
                    </div>
                    <br>
                </div>
                @endforeach
            </div>
        </div>
        {{ $posts->links() }}
    </div>
    <br>
    <a href="{{ url('/') }}" class="sitebtn btn btn-dark"><i class="fas fa-backward"></i></a>
@endsection
