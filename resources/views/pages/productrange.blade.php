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
            @foreach($Api->Product as $product)      
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="categoryholder">
                            <div class="category-image">
                                <img src="{{Voyager::image($product->CategoryImage)}}" alt="">
                            </div>
                            <div class="category-name">
                               <h4>{{$product->Category}}</h4>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>   
    </div>
    @include('partials.core.footer')
@include('partials.core.js')
</body>
</html>