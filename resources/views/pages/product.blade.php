@include('partials.core.products.producthead')
<body>
    <div class="header">
        @include('partials.core.darktopnav')
        @include('partials.core.header')
        @include('partials.core.main-nav')
    </div>    
    <div class="container newsdata">
        <div class="row">
            <div class="col-lg-9">
                <h1>{{ $product->ProductName }} <span class="productcode">({{$product->ProductCode}})</span></h1>
                <hr>   
            </div>  
            <div class="col-lg-3">
                <div class="price">
                    <h1>&pound;{{ $product->Price }}</h1>
                </div>
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
                    <img src="{{ Voyager::image( $product->ProductImage ) }}" class="productimage" alt="{{$product->ProductName}}, {{$product->Category}}" >
                    {!! $product->ProductDesc !!}
                    <hr>
                    <div class="product-table">
                        
                    <hr>
                    </div>
                    <div class="tags">
                        <h5 class="tags"><b>Tags: <i>{{ $product->Tags }}</i></b></h5>                        
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