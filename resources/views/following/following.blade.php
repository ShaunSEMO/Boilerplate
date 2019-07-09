<div data-aos="zoom-in" class="following container">
    <h1>Following</h1>
    <br>
    <img width="60px;" src="{{ asset('img/instagram.png') }}" alt="">
    <br>
    <br>
    <div class="container">
            <div class="row">
                @foreach ($followings as $following)
                    <div class="col-sm-4 col-4">
                        <h3>{{$following->followers}}</h3>
                        <br>
                        <p>Followers</p>
                      </div>
                      <div class="col-sm-4 col-4">
                          <h3>{{$following->impressions}}</h3>
                          <br>
                          <p>Impressions</p>
                      </div>
                      <div class="col-sm-4 col-4">
                          <h3>{{$following->reach}}</h3>
                          <br>
                          <p>Reach</p>
                      </div>
                @endforeach
            </div>
          </div>
          <br>
          <a class="sitebtn btn btn-dark" href="https://www.instagram.com/_valrey/">Go to Insta</a>
</div>