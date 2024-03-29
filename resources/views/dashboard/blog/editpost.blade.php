@extends('layouts.app')

@section('content')

@if(count($errors)>0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

@if (session('succes'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif


<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">

<div class="card">
    <div class="card-header">Edit post</div>
    <div class="card-body">
        {!! Form::open(['action' => ['DashboardController@updatePost', $post->id], 'files' => true, 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}

        <div class="form-group">
            {{ Form::label('image', 'Image')}}
            <br>
            {{ Form::file('image') }}
        </div>
    
        <div class="form-group">
            {{ Form::label('title', 'Title')}}
            {{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Post title']) }}
            
        </div>
    
        <div class="form-group">
            {{ Form::label('text', 'Text') }}
            {{ Form::textArea('body', $post->body, ['id' => 'summary-ckeditor','class' => 'form-control', 'placeholder' => 'Article...']) }}
        </div>
        

        {{-- <div class="form-group">
            <label>Text</label>
            <textarea style="height: 250px;" name="body" class="form-control" id="exampleFormControlTextarea1" placeholder="Article..." id="summary-ckeditor"></textarea>
        </div> --}}
        
        {{Form::hidden('_method', 'PUT')}}
        {{ Form::submit('Update', ['class' => 'btn btn-primary']) }}
        {!! Form::close() !!}
    </div>
</div>

</div>
</div>
</div>

@endsection
