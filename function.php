<?php

// membuat funsi sendiri

echo "Halo Meilan, apa kabarmu Hari ini? Semoga kabarmu sehat dan bahagia selalu<br>";
echo "Halo Naufal, apa kabarmu Hari ini? Semoga kabarmu sehat dan bahagia selalu<br>";
echo "Halo Naura, apa kabarmu Hari ini? Semoga kabarmu sehat dan bahagia selalu<br>";
echo "Halo Mimi, apa kabarmu Hari ini? Semoga kabarmu sehat dan bahagia selalu<br>";

echo "<br>"; // pindah baris baru
echo "<br>";

function tulisPesan($nama)
{
  echo "Halo $nama, apa kabarmu Hari ini? Semoga kabarmu sehat dan bahagia selalu<br>";
}
tulisPesan("Meilan");
tulisPesan("Naufal");
tulisPesan("Naura");
tulisPesan("Mimi");

echo "<br>"; // pindah baris baru
echo "<br>";

function sapaUser($nama = NULL)
{ // NULL adalah nilai default  jika tidak ada inputan  maka akan diisi NULL{
  if ($nama == NULL) { // jika nama tidak diisi maka akan menampilkan pesan berikut
    echo "Halo, apa kabarmu Hari ini? Semoga kabarmu sehat dan bahagia selalu<br>";
  } // jika nama diisi maka akan menampilkan pesan berikut
  else {
    echo "Halo $nama, apa kabarmu Hari ini? Semoga kabarmu sehat dan bahagia selalu<br>";
  }
}
sapaUser("Meilan");
sapaUser("Naufal");
sapaUser("Naura");
sapaUser("Mimi");

echo "<br>"; // pindah baris baru
echo "<br>";

// Skup Variabel
// Skup variabel (variable scope) adalah aturan yang menentukan
// di mana sebuah variabel dapat diakses atau digunakan dalam sebuah program.
function pesan($nama) // bisa, karena ada parameter nama di dalam fungsi
{
  $alamat = "Bandung";
  echo "Halo $nama, apa kabarmu Hari ini? Semoga kabarmu sehat dan bahagia selalu<br>";
}
// echo $alamat; // tidak bisa diakses karena berada di dalam fungsi
$nama = "Meilan";
pesan($nama);

echo "<br>"; // pindah baris baru
echo "<br>";

// mengembalikan hasil proses fungsi
$alas = 10;
$tinggi = 5;
function luas_segitiga($alas, $tinggi) // membuat fungsi luas segitiga
{
  $luas = $alas * $tinggi / 2;
  return $luas; // mengembalikan nilai luas
}
echo "Luas segitiga adalah " . luas_segitiga($alas, $tinggi) . "<br>"; // memanggil fungsi luas segitiga
// output : Luas segitiga adalah 25

echo "<br>"; // pindah baris baru
echo "<br>";

// fungsi parameter referensi -> mengubah nilai parameter sesuai proses yang ada di dalam fungsi.
function gantiNama(&$nama)
// menggunakan & sebelum nama parameter, agar nilai parameter dapat diubah
{
  $nama = "Indah";
}
$nama = "Risa";
gantiNama($nama); // memanggil fungsi gantiNama, dan mengubah nilai variabel nama
echo $nama; // output : Indah, karena nilai variabel nama diubah menjadi Indah

echo "<br>"; // pindah baris baru
echo "<br>";

function gantiNama2($nama) // fungsi parameter referensi, 
// tapi tidak menggunakan tanda & pada parameter, 
// sehingga tidak bisa mengubah nilai parameter, 
// hanya bisa mengubah nilai variabel lokal, bukan variabel global
{
  $nama = "Indah";
}
$nama = "Risa";
gantiNama2($nama); // memanggil fungsi gantiNama2, dan mengubah nilai variabel nama
echo $nama; // output : Risa, karena nilai variabel nama tidak diubah menjadi Indah

echo "<br>"; // pindah baris baru
echo "<br>";
