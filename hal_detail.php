<?php

session_start();

$backlink = "index.html";

if (isset($_SESSION['nama_lengkap'])) {
    $backlink = "dashboard.php";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Informasi</title>
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.css">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body{
            font-family: "Poppins", sans-serif;
            font-weight: 400;
        }
    </style>

</head>


<body>

    <header class="bg-primary text-white text-center py-4">
        <h1>Detail Informasi</h1>
    </header>

    <div class="container mt-5">
        <h2 id="infoJudul">Informasi</h2>
        <p id="infoKonten">Loading....</p>
        <a href="<?php echo $backlink; ?>" class="btn btn-primary">Kembali</a>
    </div>

    <footer class="bg-primary text-white text-center py-3 mt-5">
        <p>&copy;Copyright by 22552011263_M DIMAS DANISWARA PUTRA_TIF RP 22 CNS</p>
    </footer>

</body>

<script>
    function getQueryParam(param) {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(param);
    }

    window.onload = function () {
        const info = getQueryParam('info');

        let judul = "";
        let konten = "";

        if (info == "1") {
            judul = "Sejarah Perusahaan";
            konten = "Perusahaan kami didirikan pada tahun 2000 dengan tujuan untuk memberikan solusi inovatif di bidang teknologi informasi. Dengan lebih dari 20 tahun pengalaman, kami telah berkembang menjadi pemimpin pasar di industri ini, dengan menyediakan layanan dan produk berkualitas tinggi yang mendukung keberhasilan bisnis para pelanggan kami.";
        } else if (info == "2"){
            judul = "Produk dan Layanan Kami";
            konten = "Kami menawarkan berbagai produk dan layanan yang dirancang untuk meningkatkan produktivitas dan efisiensi bisnis. Beberapa produk utama kami termasuk perangkat lunak manajemen proyek, solusi keamanan siber, dan layanan cloud computing. Semua produk kami didukung oleh tim ahli yang siap membantu Anda 24/7.";
        } else if (info == "3"){
            judul = "Sertifikasi dan Penghargaan";
            konten = "Kami sangat bangga dengan pengakuan industri yang telah kami terima. Beberapa sertifikasi dan penghargaan yang kami peroleh meliputi standar kualitas ISO 9001 dan penghargaan sebagai perusahaan teknologi terkemuka di Asia Tenggara oleh Majalah TechWorld pada tahun 2023.";
        } else {
            judul = "Informasi Tidak Ditemukan";
            konten = "Informasi yang Anda pilih tidak ada"
        }

        document.getElementById("infoJudul").innerText = judul;
        document.getElementById("infoKonten").innerText = konten;
    }
</script>

</html>