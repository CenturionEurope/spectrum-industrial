@include('partials.core.products.producthead')
<body>
    <div class="header">
        @include('partials.core.darktopnav')
        @include('partials.core.header')
        @include('partials.core.main-nav')
    </div>  
    <div class="featureimage">
        <img src="{{ Voyager::image( $product->ProductImage ) }}" class="productimage" alt="{{$product->ProductName}}, {{$product->Category}}" >
    </div>
    <div class="container newsdata">
        <div class="row">
            <div class="col-lg-12">
                <h1>{{ $product->ProductName }}</h1>
                <hr>   
            </div>            
        </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="post">
                    <h1 class="categories">
                        Category: {{$product->Category}}/{{$product->SubCategory}}
                    </h1>
                    <hr>
                    {!! $product->ProductDesc !!}
                    <hr>
                    <div class="tags">
                        <h5 class="tags">Tags: <b><i>{{ $product->Tags }}</i></b></h5>                        
                    </div>
                </div>               
            </div>
            <div class="col-lg-3">
                <div class="sidebar">
                    @include('sidebar.widgets.recent-posts')  
                    
                    <!-- Keep contact widget at bottom -->
                    @include('sidebar.widgets.contactinfo')                 
                </div>
            </div>
        </div>
    </div>
    <!-- Related Posts --> 
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="previous-post">

                </div>
            </div>
            <div class="col-lg-">
                <div class="next-post">

                </div>
            </div>
        </div>
    </div>   
    
    @include('partials.core.footer')
@include('partials.core.js')
</body>
</html>