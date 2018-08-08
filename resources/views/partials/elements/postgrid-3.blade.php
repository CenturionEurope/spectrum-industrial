<div class="container news">
    <div class="row">
        @foreach($posts as $post)
        <div class="col-md-4">
            <div class="newsimage">
                <img src="{{ Voyager::image( $post->image ) }}">                
            </div>   
            <div class="newsinfo">
                <a href="/post/{{ $post->slug }}"><span>{{ $post->title }}</span></a>
            </div>     
        </div>
    @endforeach
    </div>
</div>
