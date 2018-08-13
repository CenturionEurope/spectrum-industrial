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
            <div class="col-lg-12">
                <h2>Datasheets</h2>                  
            </div>                       
        </div> 
        <div class="row content-area">
            @foreach($Api->Datasheets as $datasheet)            
            <div class="col-lg-3">
                <div class="datacontainer">
                    <div class="sheet-image">
                        <img src="{{Voyager::image($datasheet->image)}}" alt="">
                    </div>
                    <div class="sheet-name">
                        <h5>{{$datasheet->name}} <br>
                        Data Sheet</h5>
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