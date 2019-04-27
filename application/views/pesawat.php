
<link href="<?php echo base_url()?>assets/css/pesawat.css" rel="stylesheet">
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

    <section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(<?php echo base_url()?>assets/gambar/pesawat.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    <!-- Hero Search Form -->
                    <div class="hero-search-form">
                        <!-- Tabs Content -->
                        <div class="tab-content" id="nav-tabContent">
                            <h1>Cari Penerbangan</h1>
                        
                            <div class="radio-switch " id="SearchBox">
                                <input type="hidden" name="Flight">

                                 <div class="nav nav-tabs" id="heroTab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-places-tab" data-toggle="tab" href="#nav-places" role="tab" aria-controls="nav-places" aria-selected="true">Satu Arah</a>

                                    <a class="nav-item nav-link" id="nav-events-tab" data-toggle="tab" href="#nav-events" role="tab" aria-controls="nav-events" aria-selected="false">Pulang Pergi</a>

                                    <a class="nav-item nav-link" id="nav-events-tab" data-toggle="tab" href="#nav-events" role="tab" aria-controls="nav-events" aria-selected="false">Multi Kota</a>
                                </div>

                             </div>

                            <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab">

                                <form action="#" method="get">

                                    <select class="custom-select">

                                        <option selected>Dari</option>
                                        <option value="1">Jakarta</option>
                                        <option value="2">Surabaya</option>
                                        <option value="3">Bali</option>
                                    </select>

                                    <img src="<?php echo base_url().'/assets/gambar/flight.jpg'?>" width="50" height="30">
                                    
                                    <select class="custom-select">
                                        <option selected>Ke</option>
                                        <option value="1">Jakarta</option>
                                        <option value="2">Surabaya</option>
                                        <option value="3">Bali</option>
                                    </select>
                                        
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <input class="form-control " placeholder="Pilih Tanggal Berangkat" name="tgl_keberangkatan" type="text" id="datepicker"/>
                                    <!--<button type="submit" class="btn dorne-btn"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>-->
                                
                             <!--   <div id="item-usia">
                                    <li class="item">
                                        <label>Dewasa(>12 thn)</label>
                                             <div class="number-counter">
                                                <span class="button-minus"></span>
                                                <span class="counter">1</span>
                                            </div>
                                    </li>
                                    <li class="item">
                                        <label>Anak(2-12 thn)</label>
                                            <div class="number-counter">
                                                <span class="button-minus"></span>
                                                <span class="counter">0</span>
                                            </div>
                                    </li>
                                    <li class="item">
                                        <label>Bayi(<2 thn)</label>
                                            <div class="number-counter">
                                                <span class="button-minus"></span>
                                                <span class="counter">0</span>
                                            </div>
                                    </li>
                               </div>
-->
     
                                    <select class="" name="seatSelect" style="" height="10%">
                                        <option >Ekonomi/Ekonomi Premium</option>
                                        <option >Ekonomi Premium</option>
                                        <option >Bisnis/Utama</option>
                                        <option >Bisnis</option>
                                        <option >Utama</option>
                                    </select>
                        

                     <!--          <li class="item-nonstop">
                                    <input type="checkbox" name="" value="Bike">Hanya nonstop<br>
                                </li>

                                <div class="tip">
                                    <i class="">
                                        <font>
                                            Pilih jumlah penumpang untuk melihat harga terbaik
                                        </font>
                                </div>

                                <div class="src-btn">
                                    <a class="btn-xl" id="SearchSubmit">Cari</a>
                                 </div>
                             -->
                                </form>
                            </div>            
                        </div>
                    </div>

                                    
                </div>
            </div>
        </div>
    </section>

                        <br/>
                        <br/>
                        <br/>
                        <br/>


                    <div class="mod-inner" style="display: block;">
                        <h2 class="mod-tit">
                            <i class="icon-flight"></i>
                            <span>Promo Penerbangan Pulang-Pergi per orang, termasuk pajak dan biaya lain.</span>
                        </h2>

                        <div class="pack-tab" style="overflow: hidden;">
                                <div class="mod-tab">
                                    <a class="tab" style="cursor: pointer;">Hongkong</a>
                                    <a class="tab" style="cursor: pointer;">Taipei</a>
                                    <a class="tab" style="cursor: pointer;">Newyork</a>
                                    <a class="tab" style="cursor: pointer;">Tokyo</a>
                                    <a class="tab" style="cursor: pointer;">Seoul</a>
                                </div>

                                <div class="container" style="text-align: left;">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="card" style="width: 18rem;">
                                                <div class="card-body">
                                                    <img src="<?php echo base_url().'/assets/gambar/icon.jpg'?>" width="50" height="30">
                                                    <h6 class="card-title">Hongkong</h6>
                                                    <img src="<?php echo base_url().'/assets/gambar/flight.jpg'?>" width="50" height="30">
                                                    <h6 class="card-subtitle mb-2 text-muted">Bangkok</h6>
                                                    <div class="date">Berangkat:Kam,23 Mei</div>
                                                    <div class="date">Pulang:Min,26 Mei</div>
                                                        <div class="price-box">
                                                            <span class="price">
                                                            <span class="price-currency">Dari</span>
                                                                <span>
                                                                    <em class="price-num">Rp</em>
                                                                    <em class="price-num">4.083.901</em>
                                                                </span>
                                                            </span>
                                                        </div>       
                                                </div>   
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-3">
                                        <div class="card" style="width: 18rem;">
                                                <div class="card-body">
                                                    <img src="<?php echo base_url().'/assets/gambar/icon.jpg'?>" width="50" height="30">
                                                    <h6 class="card-title">Hongkong</h6>
                                                    
                                                    <img src="<?php echo base_url().'/assets/gambar/flight.jpg'?>" width="50" height="30">
                                                    <h6 class="card-subtitle mb-2 text-muted">Singapura</h6>
                                                    <div class="date">Berangkat:Min,28 April</div>
                                                    <div class="date">Pulang:Sel,30 Apr</div>
                                                        <div class="price-box">
                                                            <span class="price">
                                                            <span class="price-currency">Dari</span>
                                                                <span>
                                                                    <em class="price-num">Rp</em>
                                                                    <em class="price-num">3.937.552</em>
                                                                </span>
                                                            </span>
                                                        </div>       
                                                </div>
                                        </div>
                                        </div>
                                        <div class="col-md-3">
                                        <div class="card" style="width: 18rem;">
                                            <div class="card-body">
                                                <img src="<?php echo base_url().'/assets/gambar/icon.jpg'?>" width="50" height="30">
                                                <h6 class="card-title">Hongkong</h6>
                                                
                                                <img src="<?php echo base_url().'/assets/gambar/flight.jpg'?>" width="50" height="30">
                                                <h6 class="card-subtitle mb-2 text-muted">Manila</h6>
                                                <div class="date">Berangkat:Kam, 9 Mei</div>
                                                <div class="date">Pulang:Sel, 30 Apr</div>
                                                    <div class="price-box">
                                                        <span class="price">
                                                        <span class="price-currency">Dari</span>
                                                            <span>
                                                                <em class="price-num">Rp</em>
                                                                <em class="price-num">3.451.383</em>
                                                            </span>
                                                        </span>
                                                    </div>       
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                    <div class="card" style="width: 18rem;">
                                        <div class="card-body">
                                            <img src="<?php echo base_url().'/assets/gambar/icon.jpg'?>" width="50" height="30">
                                            <h6 class="card-title">Hongkong</h6>
                                            
                                            <img src="<?php echo base_url().'/assets/gambar/flight.jpg'?>" width="50" height="30">
                                            <h6 class="card-subtitle mb-2 text-muted">Tokyo</h6>
                                            <div class="date">Berangkat:Min,19 Mei</div>
                                            <div class="date">Pulang:Sel,25 Mei</div>
                                                <div class="price-box">
                                                    <span class="price">
                                                    <span class="price-currency">Dari</span>
                                                        <span>
                                                            <em class="price-num">Rp</em>
                                                            <em class="price-num">6.808.466</em>
                                                        </span>
                                                    </span>
                                                </div>       
                                        </div>
                                    </div>
                                </div>

                                 <div class="col-md-3">
                                        <div class="card" style="width: 18rem;">
                                                <div class="card-body">
                                                    <img src="<?php echo base_url().'/assets/gambar/icon.jpg'?>" width="50" height="30">
                                                    <h6 class="card-title">Hongkong</h6>
                                                    
                                                    <img src="<?php echo base_url().'/assets/gambar/flight.jpg'?>" width="50" height="30">
                                                    <h6 class="card-subtitle mb-2 text-muted">Singapura</h6>
                                                    <div class="date">Berangkat:Min,28 April</div>
                                                    <div class="date">Pulang:Sel,30 Apr</div>
                                                        <div class="price-box">
                                                            <span class="price">
                                                            <span class="price-currency">Dari</span>
                                                                <span>
                                                                    <em class="price-num">Rp</em>
                                                                    <em class="price-num">3.937.552</em>
                                                                </span>
                                                            </span>
                                                        </div>       
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card" style="width: 18rem;">
                                            <div class="card-body">
                                                <img src="<?php echo base_url().'/assets/gambar/icon.jpg'?>" width="50" height="30">
                                                <h6 class="card-title">Hongkong</h6>
                                                
                                                <img src="<?php echo base_url().'/assets/gambar/flight.jpg'?>" width="50" height="30">
                                                <h6 class="card-subtitle mb-2 text-muted">Singapura</h6>
                                                <div class="date">Berangkat:Min,28 April</div>
                                                <div class="date">Pulang:Sel,30 Apr</div>
                                                    <div class="price-box">
                                                        <span class="price">
                                                        <span class="price-currency">Dari</span>
                                                            <span>
                                                                <em class="price-num">Rp</em>
                                                                <em class="price-num">3.937.552</em>
                                                            </span>
                                                        </span>
                                                    </div>       
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="card" style="width: 18rem;">
                                            <div class="card-body">
                                                <img src="<?php echo base_url().'/assets/gambar/icon.jpg'?>" width="50" height="30">
                                                <h6 class="card-title">Hongkong</h6>
                                                
                                                <img src="<?php echo base_url().'/assets/gambar/flight.jpg'?>" width="50" height="30">
                                                <h6 class="card-subtitle mb-2 text-muted">Seoul</h6>
                                                <div class="date">Berangkat:Sab,27 April</div>
                                                <div class="date">Pulang:Sel,30 Apr</div>
                                                    
                                                    <div class="price-box">
                                                        <span class="price">
                                                        <span class="price-currency">Dari</span>
                                                            <span>
                                                                <em class="price-num">Rp</em>
                                                                <em class="price-num">4.134.535</em>
                                                            </span>
                                                        </span>
                                                    </div>       
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="card" style="width: 18rem;">
                                            <div class="card-body">
                                                <img src="<?php echo base_url().'/assets/gambar/icon.jpg'?>" width="50" height="30">
                                                <h6 class="card-title">Hongkong</h6>
                                                
                                                <img src="<?php echo base_url().'/assets/gambar/flight.jpg'?>" width="50" height="30">
                                                <h6 class="card-subtitle mb-2 text-muted">Shanghai</h6>
                                                <div class="date">Berangkat:Kam, 9 Mei</div>
                                                <div class="date">Pulang:Kam,16 Mei</div>
                                                    <div class="price-box">
                                                        <span class="price">
                                                        <span class="price-currency">Dari</span>
                                                            <span>
                                                                <em class="price-num">Rp</em>
                                                                <em class="price-num">2.183.571</em>
                                                            </span>
                                                        </span>
                                                    </div>       
                                            </div>
                                        </div>
                                    </div>
                                </div>





                        </div>
                    </div>
                <br/>
                <br/>
                <br/>
                <br/>
                <div class="container" style="">
                    <div class="row">
                            <div class="card">
                                  <h5>Cari status penerbangan</h5>
                                  <div class="col-md-baru">
                                      <div class="card-body">
                                        <h5 class="card-title">Pilih Kategori Pencarian</h5>
                                            <label class="radio-brick">
                                                <input type="radio" value="0" checked data-bind="checked:SearchType" name="ko_unique_1">
                                                <span>Nomor Penerbangan</span>
                                            </label>
                                            <label>
                                                <input type="radio" value="1" data-bind="checked:SearchType" name="ko_unique_2">
                                                <span>Kota</span>
                                            </label>
                                            <div class="status-input" data-bind="visible:SearchType()==0">
                                                <input class="coba" type="text" placeholder="e.g. MU1234" style="width: 70%; ">  
                                                <a href="#" class="btn btn-primary">Cari</a>  
                                            </div>
                                      </div>
                                </div>
                            </div>


                            <div class="col-md-8">
                            <h3 class="mod-tit">Mengapa Terbang bersama Trip.com?</h3>
                                <ul class="advantage-list">
                                <div class="col-md-8">
                                     <img src="<?php echo base_url().'/assets/gambar/ceklis.jpg'?>" width="50" height="30">
                                    <li>
                                        <i class="icon"></i>
                                        <p class="tit">Cakupan Global</p>
                                        <p class="content">Terbang ke lebih dari 5.000 Kota</p>
                                    </li>
                                     <img src="<?php echo base_url().'/assets/gambar/ceklis.jpg'?>" width="50" height="30">
                                    <li>
                                        <i class="icon"></i>
                                        <p class="tit">Harga dijamin setelah pembayaran dikonfirmasi, pemesanan dijamin setelah tiket diterbitkan</p>
                                    </li>
                                </div>

                                <div class="col-md-8">
                                     <img src="<?php echo base_url().'/assets/gambar/ceklis.jpg'?>" width="50" height="30">
                                    <li>
                                        <i class="icon"></i>
                                        <p class="tit">Pembayaran Aman </p>
                                        <p class="content">Sistem pembayaran yang nyaman & terpercaya</p>
                                    </li>
                                     <img src="<?php echo base_url().'/assets/gambar/ceklis.jpg'?>" width="50" height="30">
                                     <li>
                                        <i class="icon"></i>
                                        <p class="tit">Perjalanan Hanya di Ujung Jalan</p>
                                        <p class="content">Atur pemesanan travel dengan mudah melalui app, website atau dengan telepon</p>
                                    </li>
                                </div>
                            </ul>
                        </div>
                </div>
                            

                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
            </div>
<script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>