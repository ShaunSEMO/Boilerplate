@extends('layouts.index')

@section('shop')

    <div class="container">
        <h1>Order item</h1>
        <div class="item container custom-card custom-card-padded">

                        <br>
                        <div class="container">
                            <br>
                            <img class="img-fluid img-thumbnail" src="{{ asset($item->image) }}" alt="Post header image">
                            <br><br>
                            <h4>{!! $item->name !!}</h4>
                            <br>
                            <h5>Color: <small>{!! $item->color !!}</small></h5>
                            <br>
                            <h5>Size: <small>{!! $item->size !!}</small></h5>
                            <br>
                            <p>{!! $item->description !!}</p>
                            <br>
                            <h5>Price: {!! $item->price !!}</h5>
                            <br>
                            <br><hr>
                        </div>
        
                <br><br>
        
                <div class="container custom-card custom-card-padded order">
                        <form class="form" action="https://formspree.io/info@spyderwebs.co.za " method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                    @if (Session::has('file_message'))
                                        <div class="alert alert-success" role="alert">
                                            {{Session::get('file_message')}}
                                        </div>
                                    @endif
                                    <label for="name">Item name</label>
                                    <input name="name" type="name" class="form-control" id="exampleFormControlInput1" value="{!! $item->name !!}">
                                    @if ($errors->has('size'))
                                        <small class="form-text invalid-feedback">{{ $errors->first('size') }}</small>
                                    @endif
                                    <br>
                                    <label for="size">Size</label>
                                    <input name="size" type="number" class="form-control" id="exampleFormControlInput1" placeholder="4/5/6">
                                    @if ($errors->has('size'))
                                        <small class="form-text invalid-feedback">{{ $errors->first('size') }}</small>
                                    @endif
                                    <br>
                                    <label for="color">Color</label>
                                    <input name="color" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Red/Greed">
                                    @if ($errors->has('color'))
                                        <small class="form-text invalid-feedback">{{ $errors->first('color') }}</small>
                                    @endif
                                    <br>
                                    <label for="contact">Contact</label>
                                    <input name="contact" type="text" class="form-control" id="exampleFormControlInput1" placeholder="E-mail or phone number">
                                    @if ($errors->has('contact'))
                                        <small class="form-text invalid-feedback">{{ $errors->first('contact') }}</small>
                                    @endif
                                    <br>
                            </div>
                            <div class="form-group">
                                    <label for="address">Address</label>
                                    <input name="address" type="address" class="form-control" id="exampleFormControlInput1" placeholder="Full delivery address">
                                    @if ($errors->has('address'))
                                        <small class="form-text invalid-feedback">{{ $errors->first('address') }}</small>
                                    @endif
                                    <br>
                            </div>
                            <button type="submit" class="sitebtn btn btn-primary">Place order</button>
                        </form>
                </div>

        </div>
        <br>
        <a href="{{ url('/shop') }}" class="sitebtn btn btn-dark"><i class="fas fa-backward"></i></a>
    </div>

@endsection
