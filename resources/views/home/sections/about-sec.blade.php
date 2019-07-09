<div id="about-sec" class="container">
    <br>
    <h1 id="greeting">Hey, I'm Tebatso Valrey Nkoana.</h1>
    <br>
    @foreach($abouts as $about)
    <br>
    <img id="about-img" class="img-fluid" src="{{ asset($about->image) }}" alt="Post header image">
    <br>
    <br>
    <p id="about-p">{!! str_limit($about->body, $limit = 250, $end = '...') !!}</p>
    <br>
    <a class="sitebtn btn btn-dark" href="{{ url('about') }}">Read more</a>
    @endforeach
</div>

