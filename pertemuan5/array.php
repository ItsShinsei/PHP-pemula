<?php

//array
//pasangan antara key dan value
//key sebagai index, yang dimulai dari 0
//variable yang bisa menampung banyak data
//array bisa menampung berbagai tipe

//membuat array
//cara lama
$hari = array("Senin", "Selasa", "Rabu");
//cara baru
$bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
$arr1 = [123, "Shinsei", false];

//menampilkan array
//print_r() / var_dump() untuk menampilkan isi array
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";


//menmpilkan 1 elemen pada arra
// echo $bulan[1]; 

//menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jumat";
$hari[] = "Sabtu";  
$hari[] = "Minggu";
echo "<br>";
var_dump($hari);




?>