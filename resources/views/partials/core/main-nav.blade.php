<nav class="bg-dark-spectrum-mainnav">
    <div class="container">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs|pills" id="navId">
        <li class="nav-item">
            <a href="/" class="nav-link active">Home</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Products</a>
            <div class="dropdown-menu mega">
                <div class="container">
                    <div class="mega">
                        <div class="row">                        
                            @foreach($Api->Categories as $category)
                                <div class="col-lg-4">   
                                    <div class="nav-item">
                                        <img src="{{ Voyager::image( $category->CategoryImage ) }}" alt=""> <a href="/">{{$category->name}}</a>
                                    </div>                                                        
                                </div>
                            @endforeach                      
                        </div>
                        <div class="row">
                            <div class="menu-advert">
                                <img src="{{ Voyager::image(setting('site.nav_adert'))}}" width="100%" alt="setting('company.company_name')">
                            </div>
                        </div>
                    </div>                    
                </div>                
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="/data-sheets">Datasheets</a>
                <a class="dropdown-item" href="/infographics">Infographics</a>               
                <a class="dropdown-item" href="/literature">Literature</a>
            </div>
        </li>  
        <li class="nav-item"><a href="/" class="nav-link"> About Us </a></li>
        <li class="nav-item"><a href="/" class="nav-link">Become a Distributor</a></li>
        <li class="nav-item"><a href="/" class="nav-link">Find a Stockist</a></li>
        <li class="nav-item"><a href="/" class="nav-link">Spectrum Industrial UAE</a></li>
        <li class="nav-item"><a href="/news" class="nav-link">News</a></li>  
        <li class="nav-item"><a href="/" class="nav-link">Catalogues</a></li>                        
    </ul>
       
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane fade show active" id="tab1Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
    </div>
    </div>
</nav>
<script>
    $('#navId a').click(e => {
        e.preventDefault();
        $(this).tab('show');
    });
</script>