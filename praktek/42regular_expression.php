<?php

//* Regular Expression
/**
 * atau disebut Regex, adalah fitur dari PHP yang di gunakan untuk mencari / mengganti string dengan pola tertentu
 * 
 * regex pada php juga kompetibel dengan bahasa pemrograman perl
 * 
 * 
 * materi ini sangat panjang tapi kita akan membahas sebagian
 * diantranya 3 function regex yang sering di pakai
 * 
 * yaitu 
 * preg_match dan preg_match_all -> ini di gunakan untuk mencari kalimat berdasarkan pola yang di tentukan
 * 
 * preg_replace -> ini di gunakan untuk menimpa string / kalimat / kata berdasarkan pola yang di tentukan
 * 
 * preg_split -> ini di gunakan untuk memotong kalimat berdasarkan pola yang di tentukan menjadi array
 * 
 * 
 *
 * 
 */

//* regular expression match
// adalah regex yang di gunakan untuk mencari string / kalimat berdasarkan pola yang di tentukan


$match = []; //variabel array kosong berguna untuk menampung kalimat yang di temukan sama

$result = (bool) preg_match("/muhammad|rasul/i", "nabi muhammad saw adalah kekasih allah swt", $match);
// berisi tiga parameter 1, kalimat pola yang di cari beserta /flag nya,(i berarti incaseSensitif dll) 
// paremeter 2 berisi subject ny atau tempat kalimat yang akan di cari
// parmeter 3 adalah variabel array kosong nya


var_dump($match); // menampung kalimat yang sama
var_dump($result) . PHP_EOL; // mereturn 1, jika ada kalimat nya, dalam contoh diatas kita konversi menjadi boolean dengan mengconver dengan (bool)



//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

## Regular Expression Replace
/**
 * berguna untuk mencari kalimat / kata yang kita tentukan berdasarkan pola tertentu dan mengganti nya dengan kalimat / kata yang kita tentukan
 * 
 * pada contoh ini kita akan menganti kalimat anjing dan bangsat dengan kata ***
 */

$result2 = preg_replace("/anjing|bangsat/i", "***", "anjing lu bangsat");

var_dump($result2) . PHP_EOL;


//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>


## Regular Expression Split

/**
 * berfungsi merubah / memisahkan kalimat yang dengan pola yang kita tentukan menjadi array
 */


$result3 = preg_split("/[\s,-]/", "Muhammad Fajrin Saputra, FullStack Programmer, BackEnd developer, SoftWare Engeneering");
var_dump($result3);
