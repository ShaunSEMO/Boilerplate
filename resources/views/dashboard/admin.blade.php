@extends('layouts.app')

@section('content')

<div class="container row justify-content-md-center">

    <div class="container">
        <a href="{{ url('/') }}" class="btn btn-primary">Go to website</a>
        <br>
        <br>
        <h1>Admin Panel</h1>
        <div class=" custom-card accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <h3>About</h3>
              </button>
            </h5>
          </div>
      
          <div id="collapseOne" class="nicepad collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div style="text-align:center" class="custom-card card-body">
                           @foreach($abouts as $about)                                <a href="{{ url('/t@k3m3t0@dm!n/about/'.$about->id.'/edit') }}" class="btn btn-primary">Edit About</a>
                            <br>
                            <br>
                            <img class="img-fluid" src="{{ asset($about->image) }}" alt="Post header image">
                            <br>
                            <br>
                            <p>{!! $about->body!!}</p>
                            <br>
                            @endforeach
                </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <h3>Gallery</h3>
              </button>
            </h5>
          </div>
          <div id="collapseTwo" class="nicepad collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div style="text-align:center" class="custom-card card-body">
                            <a href="{{ url('/t@k3m3t0@dm!n/gallery/create') }}" class="btn btn-primary">Post new picture</a>
                                    @foreach($pictures as $picture)
                                    <br>
                                    <small>{{ \Carbon\Carbon::parse($picture->date)->format('d - m - Y')}}
                                    </small>
                                    <br>
                                    <img class="img-fluid" src="{{ asset($picture->image) }}" alt="Post header image">
                                    <br><br>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        {!! Form::open(['action' => ['DashboardController@destroyPicture', $picture->id], 'method' => 'POST']) !!}
                                            {{ Form::hidden('_method', 'DELETE') }}
                                            {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </div>
                                    <br>
                                    @endforeach
                                    <br><br>
                                    {{ $pictures->links() }}
                        </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <h3>Blog</h3>
              </button>
            </h5>
          </div>
          <div id="collapseThree" class="nicepad collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div style="text-align:center" class="custom-card card-body">
                            <a href="{{ url('/t@k3m3t0@dm!n/blog/create') }}" class="btn btn-primary">Create new post</a>
                                    @foreach($posts as $post)
                                            <br>
                                            <small>{{ \Carbon\Carbon::parse($post->date)->format('d - m - Y')}}
                                            </small>
                                            <br>
                                            <img class="img-fluid" src="{{ asset($post->image) }}" alt="Post header image">
                                            <h3>{!! $post->title !!}</h3>
                                            <br>
                                            <p>{!! str_limit($post->body, $limit = 150, $end = '...') !!}</p>
                                            <br>
                                            <a class="readmore" href="/valrey/public/blog/{{ $post->id }}">Read More</a>
                                            <br>
                                        <br>
                                        
                                            <a href="{{ url('/t@k3m3t0@dm!n/blog/'.$post->id.'/edit') }}" class="btn btn-warning">Edit</a>
                                            <br>
                                            <br>
                                            {!! Form::open(['action' => ['DashboardController@destroyPost', $post->id], 'method' => 'POST']) !!}
                                                {{ Form::hidden('_method', 'DELETE') }}
                                                {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                            {!!Form::close()!!}
                                      
                                        <hr>
                                    @endforeach
                                    <br>
                                    <br>
                                    {{ $posts->links() }}
                        </div>
          </div>
        </div>


        
        <div class="card">
                <div class="card-header" id="headingFour">
                  <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                          <h3>Shop</h3>
                    </button>
                  </h5>
                </div>
            
                <div id="collapseFour" class="nicepad collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                      <div style="text-align:center" class="custom-card card-body">
                            <div class="container">
                                <a href="{{ url('/t@k3m3t0@dm!n/shop/addItem') }}" class="btn btn-primary">Add item</a>
                                <br><br>
                                    @foreach($items as $item)
                                    <br>
                                    <img class="img-fluid" src="{{ asset($item->image) }}" alt="Post header image">
                                    <h3>{!! $item->name !!}</h3>
                                    <br>
                                    <h6>Color: {!! $item->color !!}</h6>
                                    <br>
                                    <h6>Size: {!! $item->size !!}</h6>
                                    <br>
                                    <p>Description: {!! $item->description !!}</p>
                                    <br>
                                    <h5>R{!! $item->price !!}</h5>
                                    <br>
                                        <a href="{{ url('/t@k3m3t0@dm!n/shop/'.$item->id.'/edit') }}" class="btn btn-warning">Edit</a>
                                        <br>
                                        <br>
                                        {!! Form::open(['action' => ['DashboardController@deleteItem', $item->id], 'method' => 'POST']) !!}
                                            {{ Form::hidden('_method', 'DELETE') }}
                                            {{ Form::submit('Remove item', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}

                                    <br><hr>
                                    @endforeach
                                    {{ $items->links() }}
                            </div>
                      </div>
                </div>
              </div>


              <div class="card">
                  <div class="card-header" id="headingFive">
                    <h5 class="mb-0">
                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                            <h3>Following</h3>
                      </button>
                    </h5>
                  </div>
              
                  <div id="collapseFive" class="nicepad collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                        <div style="text-align:center" class="custom-card card-body">
                              <div class="container">
                                  @foreach ($followings as $following)
                                  <a href="{{ url('/t@k3m3t0@dm!n/following/'.$following->id.'/edit') }}" class="btn btn-warning">Edit numbers</a>
                                    <br>
                                    <br>
                                    <div class="container">
                                        <div class="row">
                                          <div class="col-sm">
                                            <h3>{{$following->followers}}</h3>
                                            <br>
                                            <p>Followers</p>
                                          </div>
                                          <div class="col-sm">
                                              <h3>{{$following->impressions}}</h3>
                                              <br>
                                              <p>Impressions</p>
                                          </div>
                                          <div class="col-sm">
                                              <h3>{{$following->reach}}</h3>
                                              <br>
                                              <p>Reach</p>
                                          </div>
                                        </div>
                                      </div>
                                  @endforeach
                              </div>
                        </div>
                  </div>
                </div>
    </div>
</div>

</div>

@endsection
