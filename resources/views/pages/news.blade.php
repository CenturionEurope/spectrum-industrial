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
           <div class="col-lg-9">
               <h4>Latest News</h4>
               <hr>

           </div>
           <div class="col-lg-3">
                <div class="sidebar">
                    
                    
                    <!-- Keep contact widget at bottom -->
                    @include('sidebar.widgets.contactinfo')                 
                </div>
           </div>
        </div>   
    </div>
    @include('partials.core.footer')
@include('partials.core.js')
</body>
</html>