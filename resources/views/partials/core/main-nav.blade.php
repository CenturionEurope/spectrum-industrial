<nav class="bg-dark-spectrum-mainnav">
    <div class="container">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs|pills" id="navId">
        <li class="nav-item">
            <a href="/" class="nav-link active">Home</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Products</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#tab2Id">Action</a>
                <a class="dropdown-item" href="#tab3Id">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#tab4Id">Action</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#tab2Id">Action</a>
                <a class="dropdown-item" href="#tab3Id">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#tab4Id">Action</a>
            </div>
        </li>  
        <li class="nav-item"><a href="/" class="nav-link"> About Us </a></li>
        <li class="nav-item"><a href="/" class="nav-link">Become a Distributor</a></li>
        <li class="nav-item"><a href="/" class="nav-link">Find a Stockist</a></li>
        <li class="nav-item"><a href="/" class="nav-link">Spectrum Industrial UAE</a></li>
        <li class="nav-item"><a href="/" class="nav-link">News</a></li>  
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