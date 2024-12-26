<!-- // Menampilkan data array ke dalam tabel HTML -->

<?php
$karyawan =
  [
    ['nama' => 'Naufal', 'alamat' => 'Bandung', 'jenis_kelamin' => 'Pria'],
    ['nama' => 'Winda', 'alamat' => 'Surabaya', 'jenis_kelamin' => 'Wanita'],
    ['nama' => 'Abyasa', 'alamat' => 'Bandung', 'jenis_kelamin' => 'Pria']
  ];
?>
<html>

<head></head>

<body>
  <table border="1">
    <!-- membuat tabel dengan border 1 -->
    <tr>
      <!-- membuat baris -->
      <th>Nama</th>
      <!-- // membuat kolom -->
      <th>Alamat</th>
      <th>Jenis Kelamin</th>
    </tr>
    <?php
    foreach ($karyawan as $key => $value) { //mengambil nilai array, dan disimpan di variabel $value
    ?>
      <tr>
        <td><?php echo $value['nama']; ?></td>
        <!-- //menampilkan data nama, alamat, jenis kelamin -->
        <!-- //data ditampilkan di kolom, sesuai dengan key yang diambil -->
        <td><?php echo $value['alamat']; ?></td>
        <td><?php echo $value['jenis_kelamin']; ?></td>
      </tr>
    <?php
    }
    ?>
  </table>
</body>

</html