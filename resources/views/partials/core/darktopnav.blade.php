<nav class="bg-dark-spectrum-topnav">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!-- Nav tabs -->
                <ul class="nav light" id="navId">        
                    <li class="nav-item">
                        <a class="nav-link facebook" href="#" role="button" aria-hidden="true" aria-haspopup="true" aria-expanded="false"><i class="fab fa-facebook-f"></i></a>            
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" role="button" aria-hidden="true" aria-haspopup="true" aria-expanded="false"><i class="fab fa-twitter"></i></a>            
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="#" role="button" aria-hidden="true" aria-haspopup="true" aria-expanded="false"><i class="fab fa-youtube"></i></a>            
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="#" role="button" aria-hidden="true" aria-haspopup="true" aria-expanded="false"><i class="fab fa-google-plus-g"></i></a>            
                    </li>                
                </ul>
            </div>
            <div class="col-lg-6 topnav-right">
                <p><i class="fas fa-phone"></i> 01302 800273</p>
            </div>
        </div>
        
    </div>
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane fade show active" id="tab1Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
    </div>
</nav>
<script>
    $('#navId a').click(e => {
        e.preventDefault();
        $(this).tab('show');
    });
</script>