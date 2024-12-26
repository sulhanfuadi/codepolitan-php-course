<!-- proses.php -->
<!-- pada file ini akan menerima nilai yang dikirim dari file get.php
yang diambil dari url menggunakan method GET yang ditampung pada variabel $_GET. -->

<html>

<body>
  Selamat Datang <?php echo $_GET["nama"]; ?><br> // $_GET digunakan untuk mengambil data yang dikirimkan melalui URL
  Alamat Kamu: <?php echo $_GET["alamat"]; ?> // output akan menampilkan data yang dikirimkan dari file get.php
</body>

</html>