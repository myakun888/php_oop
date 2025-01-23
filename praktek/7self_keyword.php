<?php

//self keyword
/**
 * saat kita ingin mengakses constan, kita harus menggunakan nama class dan di ikuti :: lalau nama cosntant nya
 * dengan adanyan kata kunci self , ini akan mengganti nama class, saat kita mengakses constast dari object saat ini
 * ini jadi mirip kata kunci this saat mengakses propeerti dari object saat ini,
 * bedanya kalau self itu digunakan untuk mengganti nama class saaat mengaakses constanta
 */

 //kita akan menggunakan class dari file data/Rasul.php

 include_once "data/Rasul2.php";



$nabi = new Rasul2();

$nabi->iman();

//silahkan cek di file Rasul2.php