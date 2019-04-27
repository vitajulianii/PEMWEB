
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

    <section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(<?php echo base_url()?>assets/gambar/search-bg-hotel.png);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    
                    <!-- Hero Search Form -->
                    <div class="hero-search-form">
                        
                        <!-- Tabs Content -->
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab">
                              <h1>Cari Hotel</h1>
                                <form action="#" method="get">  
                                  <select class="custom-select">
                                        <option selected>Destinasi atau nama hotel</option>
                                        <option value="1">Jakarta</option>
                                        <option value="2">Surabaya</option>
                                        <option value="3">Bali</option>
                                    </select>
                                    <div class="col-md-3">
                                            <div class="row">
                                              <input class="form-control " placeholder="Check-in" name="Check-in" type="text" id="datepicker">
                                            </div>    
                                        </div>

                                       <div class="col-md-3">
                                            <div class="row">
                                              <input class="form-control " placeholder="Check-out" name="Check-out" type="text" id="datepicker">
                                            </div>    
                                        </div>
                                    <select class="custom-select">
                                        <option selected>Tamu Per Kamar</option>
                                        <option value="1">Dewasa</option>
                                        <option value="2">Anak-Anak</option>
                                    </select>
                                </form>
                                <center>
                                  <button type="submit" class="btn btn-warning btn-lg"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
                                </center>
                            </div>
                            <div class="tab-pane fade" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
                             ton type="submit" class="btn dorne-btn"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



<script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>