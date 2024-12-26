<!DOCTYPE html>
<html>

<body>
  <?php
  echo ucwords("siswa codepolitan"); // ucwords() untuk mengubah huruf pertama setiap kata menjadi huruf besar
  echo "<br>";
  echo "<br>";
  echo strtoupper("siswa codepolitan"); // strtoupper() untuk mengubah semua huruf menjadi huruf besar
  echo "<br>";
  echo "<br>";
  // phpinfo();
  // echo "<br>";
  // echo "<br>";
  ?>

  <?php
  // User Defined Function (UDF)
  function pesan()
  {
    echo "Selamat Datang Siswa Codepolitan";
  }
  pesan(); // untuk memanggil fungsi pesan
  ?>
</body>

</html>