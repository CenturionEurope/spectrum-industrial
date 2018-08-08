@foreach($posts as $post)
    <div class="col-md-4">
        <div class="newsitem">
            <a href="/post/{{ $post->slug }}">
                <img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
                <span>{{ $post->title }}</span>
            </a>
        </div>        
    </div>
@endforeach