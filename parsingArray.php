<?php
if (!empty($_POST['proses'])) { // jika tombol submit di klik
  print_r($_POST); // menampilkan data yang dikirimkan
}
?>
<form action="" method="post">
  <!-- method yang digunakan adalah post (ga keliatan di url nih)-->
  <!-- nama kunci pada array: nama -->
  Nama: <input type="text" name="nama">
  <br><br> <!-- tag html untuk membuat baris baru -->
  <!-- nama kunci pada array: alamat -->
  Alamat: <textarea name="alamat" rows="8" col="200"></textarea>
  <br><br>
  Program Studi :
  <!-- nama kunci pada array: program_studi -->
  <select name="program_studi">
    <option value="SI">Sistem Informasi</option>
    <option value="TI">Teknik Informatika</option>
    <option value="MI">Manajemen Informatika</option>
  </select>
  <br><br>
  <input type="submit" name="proses" value="submit"> <!-- tombol submit -->
</form>

<!-- Array ( [nama] => Sulhan Fuadi [alamat] => Jupiter [program_studi] => MI [proses] => submit ) -->

<!-- catatan:
1. Array yang dihasilkan tersebut memuat nama kunci beserta value, 
nama kunci berasal dari name di input form
2. value berisi data yang diinput oleh pengguna
3. cara memanggil array dengan semua data yang dikirim yaitu
dengan cara print_r($_POST) atau print_r($_GET), 
pemanggilan harus disesuaikan dengan metode yang dipakai, 
misal menggunakan metode post maka pemanggilannya menjadi $_POST.
-->