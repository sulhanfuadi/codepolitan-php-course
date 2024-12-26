<!-- get.php -->
<!-- akan dibuat form dengan method GET dan
akan mengirimkan data/nilai ke halaman proses.php (action).
Kemudian atribut (name) digunakan untuk membuat variable penampung nilai. -->

<html>

<body>
  <form action="proses.php" method="get">
    <!-- form -is a container for input fields, which are used to collect data from the user. using tag <form> in html -->
    <!-- proses.php  -->
    <!-- method get  -->
    <!-- 
        File ini digunakan untuk mengirim data ke proses.php menggunakan metode GET.
        Metode GET mengirimkan data melalui URL, sehingga data yang dikirim akan terlihat di URL.
        Contoh penggunaan:
        <form action="proses.php" method="get">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama">
            <input type="submit" value="Kirim">
        </form>
        Pada contoh di atas, data yang dimasukkan di input 'nama' akan dikirim ke proses.php
        dan dapat diakses menggunakan $_GET['nama'] di proses.php.
    -->
    Nama: <input type="text" name="nama"> <!-- input -is used to create an input field -->
    Alamat: <input type="text" name="alamat"><br><br>
    <input type="submit" value="submit"> <!-- type submit -is used to send form data to a server -->
  </form>
</body>

<!-- url yang ditampilkan akan seperti: localhost/codepolitan/GET.php?nama=Muhammad Naufal&alamat=Bandung -->

</html>