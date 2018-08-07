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
            <div class="col-lg-3">
                <div class="catsheader">
                    <p>Browse Categories</p>
                </div>
                <div class="catslist">
                    <ul>
                        <li>Category Name</li>
                        <li>Category Name</li>
                        <li>Category Name</li>
                        <li>Category Name</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">

            </div>
        </div>   
    </div>
@include('partials.core.js')
</body>
</html>