 <?php


 //sintax php
 
//standdard output

//echo, print (text / variable)
//print_r (isi array)
//vsrar_dump (melihat isi variable, usually untuk debugging)

//penulisan syntax php

//1. php inside html
//2. html inside php

//variable and types data

//variable tidak boleh diawali dengan angka, tidak boleh ada spasi, tidak boleh menggunakan simbol selain underscore (_)
$nama = "Shinsei"; 
echo "halo nama saya $nama";

//operator aritmatika
// +, -, *, /, %, ** (pangkat)
$x = 10;
$y = 5; 
echo $x * $y;

//concatenation / penggabungan string
// . (titik)
$firstName = "Shinsei";
$lastName = "Kuro";
echo "Nama saya adalah " . $firstName . " " . $lastName;

//assignment operator
// =, +=, -=, *=, /=, %=, .=
$x= 10;
$x += -5;
echo $x;

$nama = "Shinsei";
$nama .= " Kuro";
echo "Nama saya adalah " . $nama;

//perbandingan/comparison operator
// ==, ===, !=, !==, <, >, <=, >=
var_dump(1 == "1");


//identity operator
// ===, !==
var_dump(1 === "1");

//logical operator
// &&, ||, !
$x = 10;
var_dump($x > 5 && $x % 2 == 0);


?>