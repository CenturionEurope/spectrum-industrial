<div id="carouselId" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img src="/images/slides/slide-1.png" class="slide" alt="">
        </div>   
        @foreach($Api->Slides as $slide)        
        <div class="carousel-item slide">
            <img src="{{ Voyager::image( $slide->image ) }}" class="slide" alt="{{$slide->name}}">
        </div>  
        @endforeach             
    </div>
    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>