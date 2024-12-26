<?php

// string

$nama = "Meilan";
$pesan = "Selamat datang $nama";
echo $pesan;
echo "<br>"; // pindah baris baru
$pesan2 = "Selamat datang $nama";
echo $pesan2;
echo "<br>"; // pindah baris baru
echo "<br>";

// concat

//contoh1
$nama1 = "Ridwan";
$nama2 = "Kamal";
$nama_lengkap = $nama1 . $nama2;
echo $nama_lengkap; //hasilnya akan menampilkan RidwanKamal
echo "<br>"; // pindah baris baru

//contoh2
$pesan = "Hallo" . " " . "Assalamualaikum";
echo $pesan; //hasilnya akan menampilkan Hallo Assalamualaikum
echo "<br>"; // pindah baris baru

//contoh3
echo 'Selamat ' . 'Datang'; //hasilnya akan menampilkan Selamat Datang
echo "<br>";
echo "<br>";

// boolean

$nilai1  = 10;
$nilai2  = 5;
$kondisi = $nilai1 > $nilai2; //cek kondisi apakah bernilai true(benar) atau false(salah)
var_dump($kondisi); // var_dump() untuk menampilkan hasil kondisi
// hasilnya akan menampilkan boolean true
echo '<br>';

$a  = TRUE;
$b  = "TRUE";
var_dump($a); // hasilnya akan menampilkan boolean true
echo "<br>";
var_dump($b); // hasilnya akan menampilkan string 'TRUE'
echo "<br>";
echo "<br>";

// array

$angka   = array(1, 2, 3, 4, 5); //kumpulan data integer
$buah  = ["pisang", "anggur", "apel", "kiwi", "nanas"]; //kumpulan data string
echo $angka[1]; // mencetak array pada index ke 1, hasilnya akan menampilkan 2
echo "<br>";
echo $buah[3]; //mencetak array pada index ke 3, hasilnya akan menampilkan kiwi
echo "<br>";
echo "<br>";

$angka   = array(1, 2, 3, 4, 5); //kumpulan data integer
$buah  = ["pisang", "anggur", "apel", "kiwi", "nanas"]; //kumpulan data string
print_r($angka); // print_r() untuk menampilkan isi array
echo "<br>";
print_r($buah); // akan menghasilkan Array ( [0] => pisang [1] => anggur [2] => apel [3] => kiwi [4] => nanas )
echo "<br>";
echo "<br>";

$angka   = array(1, 2, 3, 4, 5); //kumpulan data integer
$buah  = ["pisang", "anggur", "apel", "kiwi", "nanas"]; //kumpulan data string
var_dump($buah); // var_dump() untuk menampilkan isi array
echo "<br>";
var_dump($angka); // akan menghasilkan array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }
echo "<br>";
echo "<br>";

$angka   = array(1, 2, 3, 4, 5); //kumpulan data integer
$buah  = ["pisang", "anggur", "apel", "kiwi", "nanas"]; //kumpulan data string
//tuliskan nama array dan nomor index yang akan diubah, lalu isi dengan data baru
$angka[3]  = 99; // mengubah data array pada index ke 3 menjadi 99
$buah[2]  = "strawberry"; // mengubah data array pada index ke 2 menjadi strawberry
var_dump($angka); // menampilkan isi array angka setelah diubah
echo "<br>";
var_dump($buah); // menampilkan isi array buah setelah diubah
echo "<br>";
echo "<br>";

// Array Assosiatif -> array yang menggunakan key sebagai index

$data['nama'] = "Muhammad Naufal";
$data['alamat'] = "Jakarta";
$data['jenis_kelamin'] = "Pria";

$alamat = array(
  "naufal" => "Bandung",
  "meilan" => "Malang",
  "marimar" => "Mexico"
);

// ekuivalen dengan:
// $alamat['naufal'] = "Bandung";
// $alamat['meilan'] = "Malang";
// $alamat['marimar'] = "Mexico";

$alamat = array(
  "naufal" => "Bandung",
  "meilan" => "Malang",
  "marimar" => "Mexico"
);
echo "Alamat Marimar adalah di " . $alamat['marimar']; // hasilnya akan menampilkan Alamat Marimar adalah di Mexico
echo "<br>";

// Looping Array
foreach ($alamat as $i => $value) { // $i adalah key, $value adalah value
  echo "Alamat " . $i . " di " . $value;
  echo "<br>";
}
// output:
// Alamat naufal di Bandung
// Alamat meilan di Malang
// Alamat marimar di Mexico

echo "<br>";

// array multidimensi -> array yang berisi array

$karnivora  = ['singa', 'macan', 'serigala'];
$herbivora  = ['kuda', 'sapi', 'kambing'];
$omnivora  = ['ayam', 'monyet', 'babi'];
$binatang  = ['karnivora' => $karnivora, 'herbivora' => $herbivora, 'omnivora' => $omnivora]; // array multidimensi

echo $binatang['karnivora'][0]; // hasilnya akan menampilkan singa
echo "<br>";
echo $binatang['omnivora'][1]; // hasilnya akan menampilkan monyet
echo "<br>";

$mahasiswa = array(
  array("Marimar", 20, "Wanita"), // array pertama, berisi nama, umur, dan jenis kelamin
  array("Soledad", 25, "Wanita"),
  array("Alfonso", 30, "Pria")
);
// menampilkan data array multidimensi
for ($baris = 0; $baris < 3; $baris++) { // perulangan untuk baris
  echo "<p><b>Baris No: $baris</b></p>";
  echo "<ul>";
  for ($kolom = 0; $kolom < 3; $kolom++) { // perulangan untuk kolom
    echo "<li>" . $mahasiswa[$baris][$kolom] . "</li>"; // menampilkan data array
  }
  echo "</ul>";
}

// output:
// Baris No: 0
// Marimar
// 20
// Wanita
// Baris No: 1
// ...

// tipe data null

echo $pesan03; // hasilnya akan menampilkan Notice: Undefined variable: pesan03

$pesan04 = NULL; // NULL digunakan untuk mengosongkan variabel
echo $pesan04; // hasilnya akan menampilkan NULL

echo "<br>";

$pesan = "Selamat Datang";
echo $pesan ?? NULL; // jika variabel pesan tidak ada, maka akan menampilkan NULL
// operator ?? digunakan untuk mengecek apakah variabel pesan ada atau tidak, dan menampilkan NULL jika tidak ada

// end of file.