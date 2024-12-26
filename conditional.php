<?php

// Conditional Statement: if
$nilai = 70;
if ($nilai >= 65) { //dijalankan ketika kondisinya true
  echo "Selamat Anda Lulus";
} // apabila tidak memenuhi kondisi, maka tidak akan menjalankan kode / proses apapun.
echo "<br>"; // pindah baris baru
echo "<br>";

// Conditional Statement: if else
$nilai = 60; //nilai yang akan di cek, perbarui nilainya jika ingin menguji kondisi lainnya
if ($nilai >= 65) { //dijalankan ketika kondisinya true
  echo "Selamat Anda Lulus";
} else { //dijalankan ketika kondisinya false
  echo "Mohon maaf Anda Tidak Lulus";
}
echo "<br>"; // pindah baris baru
echo "<br>";

// Conditional Statement: else if
$nilai = 70;
if ($nilai >= 85) {
  echo "Selamat Anda mendapat Nilai A";
} elseif ($nilai >= 70) {
  echo "Selamat Anda mendapat Nilai B";
} elseif ($nilai >= 60) {
  echo "Anda mendapat Nilai C";
} else {
  echo "Anda mendapat Nilai D";
}
echo "<br>"; // pindah baris baru
echo "<br>";

// Conditional Statement: if bersarang, nested if
$psikotes  = 85;
$wawancara  = 'lulus';
$kesehatan  = 'tidak';
if ($psikotes >= 80) {
  echo "Selamat Anda Lulus Psikotes" . "<br>";
  if ($wawancara == 'lulus') {
    echo "Selamat Anda Lulus Wawancara" . "<br>";
    if ($kesehatan == 'sehat') {
      echo "Selamat Anda Layak menjadi karyawan Kami";
    } else {
      echo "Mohon Maaf Anda tidak Lulus Tes Kesehatan";
    }
  } else {
    echo "Mohon Maaf Anda tidak Lulus Wawancara";
  }
} else {
  echo "Mohon Maaf Anda tidak Lulus Psikotes";
}
echo "<br>"; // pindah baris baru
echo "<br>";

// Conditional Statement: switch case
$nilai = "A";
switch ($nilai) {
  case 'A':
    echo "Nilai Anda sangat memuaskan";
    break; //berfungsi untuk menghentikan proses pengecekan
  case 'B':
    echo "Nilai Anda memuaskan";
    break;
  case 'C':
    echo "Nilai Anda cukup";
    break;
  case 'D':
    echo "Nilai Anda kurang";
    break;
  case 'E':
    echo "Anda tidak lulus";
    break;
  default: //jika tidak ada case yang memenuhi
    echo "Nilai tidak terdaftar";
    break;
}
echo "<br>"; // pindah baris baru
echo "<br>";

// Conditional Statement: double comparison

// && (AND)
// Apabila ukuran baju XL dengan warna kain merah, maka akan dikenakan biaya tambahan
$ukuran = 'XL';
$warna  = 'biru';
$biaya  = 70000;
if ($ukuran == 'XL' && $warna == 'merah') { // && artinya AND, keduanya harus true
  $biaya_tambahan  = 5000;
  $total_biaya  = $biaya + $biaya_tambahan;
  echo "Biaya yang dikenakan adalah " . $total_biaya;
} else { //jika salah satu kondisi tidak memenuhi
  echo "Biaya yang dikenakan adalah " . $biaya;
}
echo "<br>"; // pindah baris baru
echo "<br>";

// || (OR)
// Apabila membeli tiket tujuan Surabaya atau Malang, maka akan dapat potongan harga
$tujuan = 'Surabaya';
$harga  = 100000;
$diskon  = 10000;

if ($tujuan == 'Surabaya' || $tujuan == 'Malang') {
  $harga  = $harga - $diskon;
  echo "Harga tiket adalah " . $harga;
} else {
  echo "Harga tiket adalah " . $harga;
}
echo "<br>"; // pindah baris baru
echo "<br>";

// Conditional Statement: ternary
$nilai = 70;
if ($nilai >= 80) {
  echo "Anda Lulus";
} else {
  echo "Anda tidak Lulus";
}
echo "<br>";
// sama dengan
$nilai = 70;
echo ($nilai >= 80) ? "Anda Lulus" : "Anda tidak Lulus";

echo "<br>"; // pindah baris baru
echo "<br>";

// end of file.