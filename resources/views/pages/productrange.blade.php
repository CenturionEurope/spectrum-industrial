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
                @foreach($Categories as $product) 
                    <div class="col-lg-4">
                        
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