@extends('layouts.index')

@section('gallery')

    <div class="container">
        <div style="width: 280px; margin: auto;" class="row">
            @foreach($pictures as $picture)
            <div data-aos="flip-down" class="col-lg-6">
                <br>
                <img class="img-thumbnail img-fluid" src="{{ asset($picture->image) }}" alt="Post header image">
            </div>
            @endforeach
        </div>
        <br>
        {{ $pictures->links() }}
    </div>

@endsection
