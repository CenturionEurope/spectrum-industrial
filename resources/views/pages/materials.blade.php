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
                <h2>Material Information</h2>                  
            </div>                       
        </div> 
        <div class="row content-area">
            <div class="col-lg-8">
                <table class="materials">
                    <thead>
                        <tr>
                            <td>Code</td>
                            <td>Description</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Api->Materials as $material)
                            <tr>
                                <td class="code">{{$material->code}}</td>
                                <td>{{$material->desc}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>           
            </div>
            <div class="col-lg-3">
                
            </div>    
        </div>  
    </div>
    @include('partials.core.footer')
@include('partials.core.js')
</body>
</html>