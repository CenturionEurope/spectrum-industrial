@include('partials.core.head')
<body>
    <div class="header">
        @include('partials.core.darktopnav')
        @include('partials.core.header')
        @include('partials.core.main-nav')
    </div>
    @include('partials.elements.main-slider')
    <div class="container">
            <pre>{{print_r($Api)}}</pre>
        <div class="row content-area">  
            <div class="col-lg-12">
                <h3>Featured Categories</h3>
                
            </div>    
        </div>   
    </div>
    @include('partials.core.footer')
@include('partials.core.js')
</body>
</html>