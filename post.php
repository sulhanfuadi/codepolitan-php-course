<!-- post.php -->

<html>

<body>
  <form action="proses2.php" method="post">
    Nama: <input type="text" name="nama">
    Alamat: <input type="text" name="alamat"><br><br>
    <input type="submit" value="submit">
  </form>
</body>

<!-- Pada form di atas, saya membuat sebuah form dengan method POST 
  dan saya akan mengirimkan data/nilai ke halaman proses2.php (action). 
  
  Setelah klik tombol submit, maka akan diarahkan ke file proses2.php
  sesuai dengan action dan nilai dari form yang diisi oleh pengguna pada file post.php
  diambil oleh file proses2.php yang kemudian ditampung di variabel $_POST
  untuk menampung nilainya yang kemudian dapat ditampilkan di halaman browser.

  Perbedaan utama metode GET dan POST adalah:
  - GET mengirimkan data melalui URL, sehingga data yang dikirim akan terlihat di URL.
  - POST mengirimkan data melalui body request, sehingga data yang dikirim tidak akan terlihat di URL.
  -->


</html>