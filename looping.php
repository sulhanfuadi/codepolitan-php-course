<?php

// Looping: For

for ($x = 0; $x <= 1000; $x++) { //perulangan dimulai dari 0, dan akan berhenti ketika nilai x lebih dari 1000
  echo "Nomor Antrian yang tersedia: $x <br>";
}

echo "<br>"; // pindah baris baru
echo "<br>";

// Looping: For Array

$arr_warna  = ['merah', 'biru', 'kuning', 'merah', 'hijau', 'biru', 'merah', 'biru', 'kuning', 'merah', 'hijau', 'biru'];
$jumlah = 0;
//jumlah elemen array ada 11
for ($i = 0; $i < 11; $i++) { //perulangan dimulai dari 0, dan akan berhenti ketika nilai i lebih dari 11
  if ($arr_warna[$i] == 'merah') {
    $jumlah++;
  }
}
echo "Jumlah warna merah " . $jumlah; //output: Jumlah warna merah 4

echo "<br>"; // pindah baris baru
echo "<br>";

// Looping: While

$x = 1; //inisialisasi
while ($x <= 15) { //perulangan dimulai dari 1, dan akan berhenti ketika nilai x lebih dari 15
  echo "Nomor Antrian yang tersedia: $x <br>";
  $x++; //increment
}

echo "<br>"; // pindah baris baru
echo "<br>";

$arr_warna  = ['merah', 'biru', 'kuning', 'merah', 'hijau', 'biru', 'merah', 'biru', 'kuning', 'merah', 'hijau', 'biru'];
$jumlah  = 0;
$i    = 0; //inisialisasi
while ($i <= 11) { // perulangan dimulai dari 0, dan akan berhenti ketika nilai i lebih dari 11
  if ($arr_warna[$i] == 'merah') {
    $jumlah++;
  }
  $i++;
}
echo "Jumlah warna merah " . $jumlah; //output: Jumlah warna merah 4

echo "<br>";
echo "<br>";

$x = 1;
do {
  echo "Nomor Antrian yang tersedia: $x <br>";
  $x++;
} while ($x <= 15); //perulangan dimulai dari 1, dan akan berhenti ketika nilai x lebih dari 15

echo "<br>";
echo "<br>";

// Looping: Foreach

$arr_warna  = ['merah', 'biru', 'kuning', 'hitam', 'hijau', 'biru', 'pink', 'biru', 'jingga'];
foreach ($arr_warna as $value) { //mengambil nilai array, dan disimpan di variabel $value
  echo "Warna saat ini adalah $value <br>";
}

echo "<br>";
echo "<br>";

$arr_warna  = ['merah', 'biru', 'kuning', 'hitam', 'hijau', 'biru', 'pink', 'biru', 'jingga'];
foreach ($arr_warna as $key => $value) { // $key adalah index array, $value adalah value array
  echo "Warna pada elemen array ke-$key adalah $value <br>";
}

echo "<br>";
echo "<br>";

$arr_warna  = ['merah', 'biru', 'kuning', 'hitam', 'hijau', 'biru', 'pink', 'biru', 'jingga'];
$jumlah_merah = 0;
foreach ($arr_warna as $key => $value) {
  echo "Warna pada elemen array ke-$key adalah $value <br>";
  if ($value == 'merah') { //jika value array adalah merah, maka jumlah_merah ditambah 1
    $jumlah_merah++;
  }
}
echo "Jumlah warna merahnya adalah $jumlah_merah"; //output: Jumlah warna merahnya adalah 1

echo "<br>";
echo "<br>";

// Break -> digunakan untuk menghentikan perulangan
$arr_warna  = ['merah', 'biru', 'kuning', 'hitam', 'hijau', 'biru', 'pink', 'biru', 'jingga'];
echo "Saya mencari warna hitam<br>";
foreach ($arr_warna as $key => $value) {
  echo "Warna pada elemen array ke-$key adalah $value <br>";
  if ($value == 'hitam') {
    echo "<b>Nah Warna Hitam sudah ditemukan! Dia berada pada indeks ke-$key</b>";
    break; //perulangan berhenti ketika value array adalah hitam
  }
}

echo "<br>";
echo "<br>";

// Continue -> digunakan untuk melanjutkan perulangan
$arr_warna  = ['merah', 'biru', 'kuning', 'hitam', 'hijau', 'biru', 'pink', 'biru', 'jingga'];
foreach ($arr_warna as $key => $value) {
  if ($value == 'hitam') {
    continue; //perulangan dilewati ketika value array adalah hitam
  }
  echo "Warna pada elemen array ke-$key adalah $value <br>";
}

echo "<br>";
echo "<br>";
