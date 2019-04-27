 
  <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 




 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="<?php echo base_url('Tubes/index') ?>">
      <img src="<?php echo base_url().'/assets/gambar/logo.png'?>" width="124" height="30" alt="">
    </a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-10">
      <li class="nav-item active">
        <a style="font-size: 18px;" class="nav-link" href="<?php echo base_url('Hotel/index') ?>">Hotel</a>
      </li>
      <li class="nav-item active">
        <a style="font-size: 18px;" class="nav-link" href="<?php echo base_url('Pesawat/index') ?>">Pesawat</a>
      </li>
      <li class="nav-item active">
        <a style="font-size: 18px;" class="nav-link" href="<?php echo base_url('Kereta/index') ?>">Kereta</a>
      </li>
       <li class="nav-item active">
        <a style="font-size: 18px;" class="nav-link" href="<?php echo base_url('Promo/index') ?>">Promo</a>
      </li>

    </ul>

   

    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <li class="nav-item active">
        <a style="font-size: 18px;" class="nav-link" href="#">Bantuan </a>
      </li>
      <li class="nav-item active">
        <a style="font-size: 18px;" class="nav-link" href="">Cari pemesanan</a>
      </li>  

   <!-- Dropdown -->
  
  <li class="nav-item dropdown">
    <button class=" btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Akun
  </button>
    <ul id="login-dp" class="dropdown-menu">
      <li>
        <div class="row">
          <div class="col-md-12">
            Log in atau daftar untuk menikmati keuntungan penawaran eksklusif khusus anggota!
      
      <div class="form-group">
                      <a href="<?php echo base_url('Login/index') ?>" button class="btn btn-primary" >
                       Masuk</button></a>
      </div>
      <div class="form-group">
                      <a href="<?php echo base_url('Register/index') ?>" button class="btn btn-primary" >
                       Daftar</button></a>
      </div>
  
         
      
          </div>
        </div>
        
      </li>
    </ul>
  </li>
</div>
    

</nav>


          

<script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>