@include('partials.core.head')
<body>
    <div class="header">
        @include('partials.core.darktopnav')
        @include('partials.core.header')
        @include('partials.core.main-nav')
    </div>
    @include('partials.elements.main-slider')
    <div class="container">
        <div class="row content-area">            
           <div class="col-lg-9">
                <pre>{{print_r($Api)}}</pre>
               <h4>Latest News</h4>
               <hr>
               @foreach($posts as $post)
                <div class="news-article">
                    <div class="feature-image">
                        <a href="/post/{{ $post->slug }}"><img src="{{ Voyager::image( $post->image ) }}" alt="{{$post->title}}"></a>
                    </div>
                    <a href="/post/{{ $post->slug }}"><h3>{{ $post->title }}</h3></a>
                    <p>{{$post->excerpt}}</p>
                    <p><i class="far fa-clock"></i> {{ date('d M Y', strtotime($post->created_at)) }} <i class="far fa-user user"></i> {{$post->author_id}}</p>
                </div>
                <hr>
               @endforeach
           </div>
           <div class="col-lg-3">
                <div class="sidebar">
                    
                    
                    <!-- Keep contact widget at bottom -->
                    @include('sidebar.widgets.contactinfo')                 
                </div>
           </div>
        </div>   
    </div>
    @include('partials.core.footer')
@include('partials.core.js')
</body>
</html>