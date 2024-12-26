<!-- managementFile.php -->

<?php

// membuat file melalui PHP
$pesan = "Ini hasil membuat file melalui PHP";
file_put_contents("file.txt", $pesan); // membuat file.txt dan menuliskan isi variabel pesan
// Ketika kode tersebut dijalankan, maka akan membuat sebuah file dengan nama file file.txt

// membaca isi file
$pesan = "Ini hasil membuat file melalui PHP";
file_put_contents("file.txt", $pesan);
$isi_file = file_get_contents("file.txt"); // membaca isi file.txt
echo $isi_file; // menampilkan

// Serialize
// Mengubah Array dalam bentuk Serialize
// simpan array dalam array so bisa dipake lagi nanti

$karyawan  = [
  ['nama' => 'Toni', 'alamat' => 'Bandung'],
  ['nama' => 'Naufal', 'alamat' => 'Bandung'],
  ['nama' => 'Davi', 'alamat' => 'Jakarta']
];
echo serialize($karyawan); // mengubah array dalam bentuk serialize
file_put_contents('data.txt', $data); // membuat file data.txt dan menuliskan isi variabel data

// Unserialize
// Mengubah Serialize dalam bentuk Array
$output  = file_get_contents('data.txt'); // membaca isi file data.txt
$hasil  = unserialize($output); // mengubah serialize dalam bentuk array
print_r($hasil); // menampilkan hasil

// Mengubah Array dalam bentuk JSON
// mirip dengan serialize, tapi dalam bentuk JSON
$karyawan  = [
  ['nama' => 'Toni', 'alamat' => 'Bandung'],
  ['nama' => 'Naufal', 'alamat' => 'Bandung'],
  ['nama' => 'Davi', 'alamat' => 'Jakarta']
];

// mengubah array dalam bentuk JSON
$data = json_encode($karyawan);
file_put_contents('', $data);
file_put_contents('data.txt', $data); // membuat file data.txt dan menuliskan isi variabel data

// Mengubah JSON dalam bentuk Array
$output  = file_get_contents('data.txt'); // membaca isi file data.txt
$hasil  = json_decode($output, true); // mengubah JSON dalam bentuk array, true untuk mengubah dalam bentuk array
print_r($hasil); // menampilkan hasil