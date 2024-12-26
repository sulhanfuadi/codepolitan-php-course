<?php

// form -is a container for input fields, which are used to collect data from the user. using tag <form> in html

// method - attribute specifies the HTTP method (GET or POST) to be used when submitting the form data.

// GET
// The GET method is used to request data from a specified resource.
// menjadi lebih dinamis, data yang dikirimkan akan terlihat di URL browser.

$nama  = $_GET['nama']; // $_GET digunakan untuk mengambil data yang dikirimkan melalui URL
$alamat  = $_GET['alamat']; // $_GET digunakan untuk mengambil data yang dikirimkan melalui URL
?>

<!DOCTYPE html>
<html>

<body>
  <h1>Selamat Datang <?php echo $nama; ?></h1>
  <h2>Alamat Kamu adalah di : <?php echo $alamat; ?></h2>
</body>

</html>