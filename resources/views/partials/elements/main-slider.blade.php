<div class="SlickMe">
    @foreach($Api->Slides as $slide)        
        <div>
            <div class="slide-content" style="background-image: url({{ Voyager::image( $slide->image ) }})">
                <div class="container">
                    <div class="content right">
                        {!!$slide->content!!}
                    </div>
                </div>
            </div>
        </div>  
    @endforeach
</div>  