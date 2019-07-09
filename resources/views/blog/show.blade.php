@extends('layouts.index')

@section('blog')
    <div class="container">
            <div class="container each-post">
                    <div id="date-div">
                        <small id="post-date">{{ \Carbon\Carbon::parse($post->date)->format('d - m - Y')}}</small>
                    </div>
                    <br>
                    <img class="img-fluid" src="{{ asset($post->image) }}" alt="Post header image">
                    <br>
                    <br>
                    <h3>{!! $post->title !!}</h3>
                <p class="post">{{ $post->body }}</p>
                <br>
                <hr>
                <br>
                {{-- DISQUS COMMENTS --}}
                <div class="container">
                            <div id="disqus_thread"></div>
                            <script>
                            
                            /**
                            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                            /*
                            var disqus_config = function () {
                            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                            };
                            */
                            (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');
                            s.src = 'https://valrey-nkoana.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                            })();
                            </script>
                            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                </div>


            </div>
            <br>
            <a href="{{ url('/blog') }}" class="sitebtn btn btn-dark"><i class="fas fa-backward"></i></a>
    </div>
@endsection
