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
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="productimage">
                                <img src="/images/product-images/LOK070.jpg" class="tile" data-scale="2.4" alt="{{ $product->ProductName }} - {{$product->Category}}">
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="productimage-sub">
                                        <img src="/images/product-images/LOK070.jpg" class="tile" data-scale="2.4" alt="{{ $product->ProductName }} - {{$product->Category}}">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="productimage-sub">
                                        <img src="/images/product-images/LOK070.jpg" class="tile" data-scale="2.4" alt="{{ $product->ProductName }} - {{$product->Category}}">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="productimage-sub">
                                        <img src="/images/product-images/LOK070.jpg" class="tile" data-scale="2.4" alt="{{ $product->ProductName }} - {{$product->Category}}">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="productimage-sub">
                                        <img src="/images/product-images/LOK070.jpg" class="tile" data-scale="2.4" alt="{{ $product->ProductName }} - {{$product->Category}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                                <div class="producttext">
                                    <h4>Product Description</h4>
                                    {!! $product->ProductDesc !!}
                                    <table class="productinfo">
                                        <thead class="spectrum">
                                            <tr>
                                                <th>Size</th>
                                                <th>Code</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>40mm</td>
                                                <td>{{$product->ProductCode}}</td>
                                            </tr>
                                        </tbody>
                                    </table>  
                                    <div class="tags">
                                        <h5 class="tags"><b>Tags: <i>{{ $product->Tags }}</i></b></h5>                        
                                    </div>                                  
                                </div> 
                        </div>
                    </div>                                                         
                    <hr>
                    <h4>Related Products</h4>
                    <div class="row">                        
                            <div class="col-lg-3">
                                <div class="productimage">
                                    <img src="/images/product-images/LOK070.jpg" class="tile" data-scale="2.4" alt="{{$product->ProductName}} - {{$product->Category}}, {{$product->SubCategory}} ">
                                </div>
                                {{$product->ProductName}} <br>
                                &pound;{{ $product->Price }} <br>
                                <sub>{{$product->ProductCode}}</sub><br>
                                
                            </div>
                            <div class="col-lg-3">
                                    <div class="productimage">
                                        <img src="/images/product-images/LOK070.jpg" class="tile" data-scale="2.4" alt="{{$product->ProductName}} - {{$product->Category}}, {{$product->SubCategory}} ">                                        
                                    </div>
                                    {{$product->ProductName}} <br>
                                    &pound;{{ $product->Price }} <br>
                                    <sub>{{$product->ProductCode}}</sub><br>
                            </div>
                            <div class="col-lg-3">
                                <div class="productimage">
                                    <img src="/images/product-images/LOK070.jpg" class="tile" data-scale="2.4" alt="{{$product->ProductName}} - {{$product->Category}}, {{$product->SubCategory}} ">
                                </div>
                                {{$product->ProductName}} <br>
                                &pound;{{ $product->Price }} <br>
                                <sub>{{$product->ProductCode}}</sub><br>
                            </div>
                            <div class="col-lg-3">
                                <div class="productimage">
                                    <img src="/images/product-images/LOK070.jpg" class="tile" data-scale="2.4" alt="{{$product->ProductName}} - {{$product->Category}}, {{$product->SubCategory}} ">
                                </div>
                                {{$product->ProductName}} <br>
                                &pound;{{ $product->Price }} <br>
                                <sub>{{$product->ProductCode}}</sub><br>
                            </div>
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