
<center><h2>Login</h2></center>
<center>
<h5 class="text-center"><?php echo $this->session->flashdata('messages'); ?></h5>
<form action="<?php echo base_url('Login/auth') ?>" method="post">
   
    <input style="width: 25%;" type="text" placeholder="Email/Nama Pengguna" name="username" required>
    <br/><br/>
    
    <input style="width: 25%;" type="password" placeholder="Kata Sandi" name="password" required>
    <br/><br/>
    <button  class="btn2" style="width: 25%; background-color: #36a9e1;" type="submit">Login</button>
</form>
    <p class="as">
    Dengan melanjutkan, saya menyatakan bahwa saya telah membaca dan menyetujui
    <a href="https://pages.trip.com/service-guideline/terms-id-id.html?noTitle=true" target="_blank">Syarat Penggunaan</a>
    dan
    <a href="https://pages.trip.com/service-guideline/privacy-policy-id-id.html?noTitle=true" target="_blank">Syarat Penggunaan</a>

    </p>
    
  </div></center>
    <p align="center">
      Bukan anggota trip.com?
      <a id="regeistBtn" class="register-lnk" href="<?php echo base_url('Register/index') ?>"> Daftar Sekarang</a>
    </p>
</form>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

