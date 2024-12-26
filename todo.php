<?php
//total array yang disiapkan untuk disimpan
$todos  = [];
if (file_exists('todo.txt')) {
  //membaca file todo.txt
  $file  =  file_get_contents('todo.txt');
  //mengubah format serialize menjadi array
  $todos  =  unserialize($file);
}
//Jika ditemukan todo yang dikirim melalui methode POST
if (isset($_POST['todo'])) { // mengecek apakah data yang di input kosong atau tidak
  $data  = $_POST['todo']; // mengabil data yang di input pada form
  $todos[] = [
    'todo'  => $data, // menambahkan data ke dalam array
    'status' => 0 // status 0 berarti belum selesai
  ];
  $daftar_belanja = serialize($todos); // mengubah array menjadi serialize
  simpanData($daftar_belanja); // memanggil fungsi simpanData
}

//jika ditemukan $_GET['status']
if (isset($_GET['status'])) {
  //ubah status
  $todos[$_GET['key']]['status'] = $_GET['status'];
  $daftar_belanja = serialize($todos);
  simpanData($daftar_belanja); // memanggil fungsi simpanData
}

//jika ditemukan perintah hapus 
if (isset($_GET['hapus'])) {
  //hapus data  sesuai key yang dipilih
  unset($todos[$_GET['key']]);
  $daftar_belanja = serialize($todos);
  simpanData($daftar_belanja); // memanggil fungsi simpanData
}

//fungsi untuk menyimpan data
function simpanData($daftar_belanja)
{
  file_put_contents('todo.txt', $daftar_belanja); // menuliskan data ke dalam file todo.txt
  //redirect halaman
  header('location:todo.php');
}

// print_r($todos); // menampilkan data array
?>

<h1>Todo App</h1>
<form action="" method="post">
  <!-- // membuat form dengan method post -->
  <label>Daftar Belanja Hari ini<label><br>
      <input type="text" name="todo">
      <button type="submit">Simpan</button>
</form>
<ul>
  <?php foreach ($todos as $key => $value): ?>
    <li>
      <input type="checkbox" name="todo" onclick="window.location.
      href='todo.php?status=<?php echo ($value['status'] == 1) ? '0' : '1'; ?>&key=<?php echo $key; ?>'"
        <?php if ($value['status'] == 1) echo 'checked' ?>>
      <label>
        <?php
        if ($value['status'] == 1) {
          echo '<del>' . $value['todo'] . '</del>';
        } else {
          echo $value['todo'];
        }
        ?>
      </label>
      <a href="todo.php?hapus=1&key=<?php echo $key; ?>"
        onclick="return confirm('Apakah Anda Yakin akan menghapus data ini?')">hapus</a>
    </li>
  <?php endforeach; ?>
</ul>