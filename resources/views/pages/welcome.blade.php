@include('partials.core.head')
<body>
    <div class="header">
        @include('partials.core.darktopnav')
        @include('partials.core.header')
        @include('partials.core.main-nav')
    </div>
    @include('partials.elements.main-slider')
    <pre>{{print_r($Api)}}</pre>
    <div class="container">
        <div class="row content-area">            
            <div class="col-lg-3">
                <div class="categorybox">
                    <div class="catboxheader">
                        <h5>Category Name</h5>
                    </div>                    
                </div>
            </div>            
            <div class="col-lg-3">
                <div class="categorybox">
                    <div class="catboxheader">
                        <h5>Category Name</h5>
                    </div>   
                </div>
            </div>
            <div class="col-lg-3">
                <div class="categorybox">
                    <div class="catboxheader">
                        <h5>Category Name</h5>
                    </div>  
                </div>
            </div>
            <div class="col-lg-3">
                <div class="categorybox">
                    <div class="catboxheader">
                        <h5>Category Name</h5>
                    </div> 
                </div>
            </div>
        </div>   
    </div>
    @include('partials.core.footer')
@include('partials.core.js')
</body>
</html>