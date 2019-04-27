
   <link href="<?php echo base_url()?>assets/css/home.css" rel="stylesheet">
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

    <section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(assets/gambar/poto.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="hero-content">
                        <h2>Cara Mudah Travelling</h2>
                    </div>
                    <!-- Hero Search Form -->
                    <div class="hero-search-form">
                        <!-- Tabs -->
                        <div class="nav nav-tabs" id="heroTab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-places-tab" data-toggle="tab" href="#nav-places" role="tab" aria-controls="nav-places" aria-selected="true">Hotel</a>
                            <a class="nav-item nav-link" id="nav-events-tab" data-toggle="tab" href="#"  role="tab" aria-controls="nav-events" aria-selected="false">Pesawat</a>

                            <a class="nav-item nav-link" id="nav-events-tab" data-toggle="tab" href="#nav-events" role="tab" aria-controls="nav-events" aria-selected="false">Kereta</a>
                        </div>
                        <!-- Tabs Content -->
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab">
                                <form action="#" method="get">
                                    <select class="custom-select">
                                        <option selected>Destinasi Nama Hotel</option>
                                        <option value="1">New York</option>
                                        <option value="2">Latvia</option>
                                        <option value="3">Dhaka</option>
                                        <option value="4">Melbourne</option>
                                        <option value="5">London</option>
                                    </select>
                                    <select class="custom-select">
                                        <option selected>CheckIn</option>
                                        <p>Date: <input type="text" id="datepicker"></p>
 
                                    </select>
                                    <select class="custom-select">
                                        <option selected>CheckOut</option>
                                        <option value="1">$100 - $499</option>
                                        <option value="2">$500 - $999</option>
                                        <option value="3">$1000 - $4999</option>
                                    </select>
                                    <button type="submit" class="btn dorne-btn"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
                                <h6>What are you looking for?</h6>
                                <form action="#" method="get">
                                    <select class="custom-select">
                                        <option selected>Your Destinations</option>
                                        <option value="1">New York</option>
                                        <option value="2">Latvia</option>
                                        <option value="3">Dhaka</option>
                                        <option value="4">Melbourne</option>
                                        <option value="5">London</option>
                                    </select>
                                    <select class="custom-select">
                                        <option selected>All Catagories</option>
                                        <option value="1">Catagories 1</option>
                                        <option value="2">Catagories 2</option>
                                        <option value="3">Catagories 3</option>
                                    </select>
                                    <select class="custom-select">
                                        <option selected>Price Range</option>
                                        <option value="1">$100 - $499</option>
                                        <option value="2">$500 - $999</option>
                                        <option value="3">$1000 - $4999</option>
                                    </select>
                                    <button type="submit" class="btn dorne-btn"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



<script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>