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
    <div class="card-header">Edit numbers</div>
    <div class="card-body">
        {!! Form::open(['action' => ['DashboardController@updateFollowing', $followings->id], 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
    
        

        <div class="container">
                <div class="row">
                  <div class="col-sm">
                    <div class="form-group">
                        {{ Form::label('followers', 'Followers')}}
                        {{ Form::text('followers', $followings->followers, ['class' => 'form-control']) }}
                    </div>
                  </div>
                  <div class="col-sm">
                      <div class="form-group">
                        {{ Form::label('impressions', 'Impressions')}}
                        {{ Form::text('impressions', $followings->impressions, ['class' => 'form-control']) }}
                    </div>
                  </div>
                  <div class="col-sm">
                      <div class="form-group">
                        {{ Form::label('reach', 'Reach')}}
                        {{ Form::text('reach', $followings->reach, ['class' => 'form-control']) }}
                    </div>
                  </div>
                </div>
              </div>
        
        {{Form::hidden('_method', 'PUT')}}
        {{ Form::submit('Update', ['class' => 'btn btn-primary']) }}
        {!! Form::close() !!}
    </div>
</div>

</div>
</div>
</div>

@endsection
