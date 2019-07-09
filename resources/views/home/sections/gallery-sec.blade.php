<div data-aos="zoom-in" class="container">
    <h2>Gallery</h2>
        
        <br>
        
        <br><br>

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img class="rounded d-block w-100" class="img-fluid" src="{{ asset( $pictures->first()->image ) }}" alt="Post header image">
                </div>

                @foreach($pictures as $key => $picture)
                @if($key > 0)
                <div class="carousel-item">
                    <img class="rounded d-block w-100" class="img-fluid" src="{{ asset($picture->image) }}" alt="Post header image">
                </div>
                @endif
                @endforeach

            </div>

            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            
          </div>
          <br>
          <a class="sitebtn btn btn-dark" href="{{ url('gallery') }}">Go to gallery</a>


</div>