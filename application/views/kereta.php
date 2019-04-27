
   <link href="<?php echo base_url()?>assets/css/kereta.css" rel="stylesheet">
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

    <section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(<?php echo base_url()?>assets/gambar/search-bg.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    
                    <!-- Hero Search Form -->
                    <div class="hero-search-form">
                        
                        <!-- Tabs Content -->
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab">
                                <form action="#" method="get">
                                    <select class="custom-select">
                                        <option selected>Dari</option>
                                        <option value="1">Jakarta</option>
                                        <option value="2">Surabaya</option>
                                        <option value="3">Bali</option>
                                    </select>
                                    <select class="custom-select">
                                        <option selected>Ke</option>
                                        <option value="1">Jakarta</option>
                                        <option value="2">Surabaya</option>
                                        <option value="3">Bali</option>
                                    </select>
                                    <div class="col-md-3">
                        <input class="form-control " placeholder="Pilih Tanggal" name="tgl_keberangkatan" type="text" id="datepicker">
                    </div>
                                    
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