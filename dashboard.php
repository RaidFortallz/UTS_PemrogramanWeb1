<?php
session_start();
if (!isset($_SESSION['nama_lengkap'])) {
    echo "<script>window.location.href = 'login.html';</script>";
    exit;
} 
$nama_lengkap = $_SESSION['nama_lengkap'];
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu Utama</title>
  <link href="bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>

  <section id="nav-bar">

    <nav class="navbar navbar-expand-lg ">
      <div class="container-fluid">
        <a class="navbar-brand" href="dashboard.html"><img src="images/akatsuki.png" class="img img-fluid" alt="image"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#banner">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#info">INFO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#footer">CONTACT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">LOGOUT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </section>

  <!----------BANNER DI BAWAH NAVBAR----------->

  <section id="banner">
    <div class="container">
      <div class="row content">
        <div class="col-md-6 mt-5 ps-5">
          <p class="fs-1 fw-semibold">SELAMAT DATANG <br> <?php echo $nama_lengkap; ?></p>
          <P class="fs-5">Ini adalah Halaman Menu Utama</P>
        </div>
        <div class="col-md-6 text-center">
          <img src="images/home2.png" class="img_home img-fluid " alt="image">
        </div>
      </div>
    </div>

    <img src="images/wave1.png" class="img_bottom" alt="image">

  </section>

  <!-------BAGIAN INFO-------->
  <section id="info">
    <div class="container mt-5">
      <h2 class="text-center mb-5">List Informasi Perusahaan</h2>
      <div class="row">
          <div class="col-md-4">
              <div class="card">
                  <img src="images/museum.png" class="card-img-top" alt="Info 1">
                  <div class="card-body">
                      <h5 class="card-title">Sejarah Perusahaan</h5>
                      <p class="card-text">Perusahaan kami didirikan pada tahun 2000 dengan tujuan untuk memberikan
                            solusi inovatif di bidang teknologi informasi. Dengan lebih dari 20 tahun pengalaman, kami
                            telah berkembang menjadi pemimpin pasar di industri ini, dengan menyediakan layanan dan
                            produk berkualitas tinggi yang mendukung keberhasilan bisnis para pelanggan kami.</p>
                      <a href="hal_detail.php?info=1" class="btn btn-primary">Lihat Detail</a>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card">
                  <img src="images/business.png" alt="Info 2" class="card-img-top">
                  <div class="card-body">
                      <h5 class="card-title">Produk dan Layanan Kami</h5>
                      <p class="card-text">Kami menawarkan berbagai produk dan layanan yang dirancang untuk
                            meningkatkan produktivitas dan efisiensi bisnis. Beberapa produk utama kami termasuk
                            perangkat lunak manajemen proyek, solusi keamanan siber, dan layanan cloud computing. Semua
                            produk kami didukung oleh tim ahli yang siap membantu Anda 24/7.</p>
                      <a href="hal_detail.php?info=2" class="btn btn-primary">Lihat Detail</a>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card">
                  <img src="images/popular.png" alt="Info 3" class="card-img-top">
                  <div class="card-body">
                      <h5 class="card-title">Sertifikasi dan Penghargaan</h5>
                      <p class="card-text">Kami sangat bangga dengan pengakuan industri yang telah kami terima.
                            Beberapa sertifikasi dan penghargaan yang kami peroleh meliputi standar kualitas ISO 9001
                            dan penghargaan sebagai perusahaan teknologi terkemuka di Asia Tenggara oleh Majalah
                            TechWorld pada tahun 2023.</p>
                      <a href="hal_detail.php?info=3" class="btn btn-primary">Lihat Detail</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </section>

  <footer id="footer" class="text-white text-center pb-4 mt-5">
    <img src="images/wave2.png" class="img_footer img-fluid" alt="image">
    <p class="mt-5">&copy;Copyright by 22552011263_M DIMAS DANISWARA PUTRA_TIF RP 22 CNS</p>
  </footer>

</body>

</html>