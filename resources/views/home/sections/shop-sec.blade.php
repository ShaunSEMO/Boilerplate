<div class="container">
    <br>
    <h2>Shop at Her.Styl</h2>
    <br>
<div class="custom-card-glass">
    <br>
    
        <div class="container">
            <div class="row">
                @foreach($items as $item)
                    <div data-aos="flip-right" class="col-lg-3 col-md-4 col-sm-6">
                        <br>
                        <div class="container custom-card">
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
                            <a class="btn btn-primary" href="shop/{{$item->id}}">Order</a>
                            <br><hr>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <a href="{{ url('shop') }}" class="sitebtn btn btn-dark">Go to shop</a>
        <br>
        <br>
    </div>

</div>