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
            <pre>{{print_r($Api)}}</pre>                 
            <div class="container">
                <div class="row">
                @foreach($Api->Categories as $Category) 
                    <div class="col-lg-4">
                        <div class="categoryholder">
                            <div class="category-image">
                                <a href="{{$Category->slug}}" title="{{$Category->name}}">
                                    <img src="{{Voyager::image($Category->CategoryImage)}}" alt="{{$Category->name}}">
                            </div>
                            <div class="category-name">                                
                                    <h4 class="center">{{$Category->name}}</h4>
                                </a>                          
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
            
        </div>   
    </div>
    @include('partials.core.footer')
@include('partials.core.js')
</body>
</html>