<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="kontak.css" />
    <title>SejutaImpian</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="asset/Logo.svg" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-md-center" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.html">Beranda</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Event </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#" style="color: black; font-weight: 600">Beasiswa</a></li>
                <li><a class="dropdown-item" href="#" style="color: black; font-weight: 600">Lomba</a></li>
                <li><a class="dropdown-item" href="webinar_page.html" style="color: black; font-weight: 600">Webinar</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Kontak</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tentang_kami.html">Tentang Kami</a>
            </li>
          </ul>
        </div>
        
        <div class="login">
          <ul>
          <button id="show-login">Login</button>
          <a class="nav-link" style="display: inline">Login</a>
          <a class="btn btn-light" href="signup.html" role="button" id="signup">Signup</a>
           </ul> 
        </div>      
       
      </div>
    </nav>
    <!-- popup login -->
    <div class="container-popup">
      <div class="card login-form">
        <div class="close-button">
          <a><img src="asset/exit-icon.png" /></a>
          <button><img src="asset/exit-icon.png" /></button>
        </div>
        <div class="card-body">
          <h2 class="card-title">Masuk</h2>
          <div class="card-subtitle"><h6>Masuk dan segera dapatkan manfaatnya</h6></div>
          <form>
            <div class="mb-4">
              <label for="exampleInputEmail1" class="form-label" aria-placeholder="Email">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
            </div>
            <div class="mb-4">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" />
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1" />
              <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
              <a href="#">Lupa sandi?</a>
            </div>
            <div class="row justify-content-center" id="login">
              <button type="submit" class="btn btn-primary items-align-center">Login</button>
            </div>

            <div class="belum">
              <h6>Belum terdaftar?<a href="signup.html">Buat Akun</a></h6>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- End popup login -->
    <!-- end nav -->
    <!-- Content -->
    <div class="buku">
      <div class="judul">
        <h2>Kontak Kami<h2>
      </div>
      <form id="form-buku" method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <div class="mb-3 ">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" id="nama" name="fnama">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="femail" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="telfon" class="form-label">Nomor Telefon</label>
      <input type="number" class="form-control" id="telfon" name="ftelfon">
    </div>
    <div class="mb-3 ">
      <label for="medsos" class="form-label">Instagram</label>
      <input type="text" class="form-control" id="medsos" name="fmedsos">
    </div>
    <div class="mb-3">
      <label for="pesan" class="form-label">Pesan</label>
      <textarea class="form-control" id="pesan" rows="3" name="fpesan"></textarea>
    </div>
      <button type="submit" class="btn btn-primary" value="submit">Kirim</button>
    </div>
  
  
</form>
<!-- Database -->
  <div class="database">
    <?php
      $nama = isset($_POST['fnama']) ? $_POST['fnama'] : '';
      $email = isset($_POST['femail']) ? $_POST['femail'] : '';
      $telfon = isset($_POST['ftelfon']) ? $_POST['ftelfon'] : '';
      $medsos = isset($_POST['fmedsos']) ? $_POST['fmedsos'] : '';
      $pesan = isset($_POST['fpesan']) ? $_POST['fpesan'] : '';

      $data = 
      "<br>Hasil Dari Database<br>
      
      Nama: $nama<br>
      Email: $email<br>
      Nomor HP: $telfon<br>
      Media Sosial: $medsos<br>
      Pesan: $pesan<br>";

      $Tamu = fopen("kontak.txt", "w");

      if(isset($_POST['fnama']) || isset($_POST['femail']) || isset($_POST['ftelfon']) || isset($_POST['fmedsos']) || isset($_POST['fpesan'])){
        fwrite($Tamu ,$data);
        fclose($Tamu);
        
      }
      if(isset($_POST['fnama']) || isset($_POST['femail']) || isset($_POST['ftelfon']) || isset($_POST['fmedsos']) || isset($_POST['fpesan'])){
        $Tamu = fopen("kontak.txt", "r");
        echo fread($Tamu, filesize("kontak.txt"));
      }
  
    ?>
    </div>
    <!-- end content -->

    <!--Start footer-->
    <script src="login-overlay.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <!--End footer-->
  </body>
</html>
