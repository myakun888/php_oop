<?php
//* inheritance
/**
 * adalah pewarisan, dimana kita bisa membuat class dapat mewaris segal prperti dan method nya ke class child nya
 * 
 *
 */

 // dalam contoh ini kita akan memakai class dari file data/Rasul4.php 
 // silahkan lihat file nya

 include_once "data/Rasul4.php";

 // ini kita membuat object dari class parents yaitu class Rasul4
 $muhammad = new Rasul3("muhammad saw","SAW");

 // ini kita mmebuat object dari classs child yaitu class Nabi

 $khidir = new Nabi("khidir","AS");


 //* mengakses propertis dan method pada class parent
// sama seperti pada objek mengakses propetis biasa $namaObject->propetinya

echo $muhammad->name.PHP_EOL; //mengakses properti name pada object nya
echo $khidir->name.PHP_EOL; //mengakses properti name yang berasal dari parents

//mengakses metohd parent
$muhammad->informasi().PHP_EOL;
$khidir->informasi();

//! resume
//intinya apa bila kita melakukan inheeritance, maka otomatis semua properti dan metod yang ada pada class parents otomatis akan di turunkan ke class child nya (kecuali yang visibliti ny private)
