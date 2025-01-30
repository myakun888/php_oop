<?php
//* import
/**
 * seblumnya saat kita menggunkan namespace , kita akan selalu menulis ulang setiap kita ingin menggunakan nya
 * ini akan menyebabkan duplikasi
 * di php kita bisa melakukan import namespace, tadi dengan kata kunci use, sehingga kita cukup satu kali
 * menulis use di awal
 */


 include_once "data/data2.php";

 //! dalam contoh ini silahkan lihat nama namespace nya di file data/data2


// menulis use
// use di ikuti namesapce\datanya

// memangil clas
use file\data1\Human;               // memanggil class Human
// use file\data1\{Human,Avenger,SuperHero};   // ini menggunakna group deklarsi , baca penjelsan di akhir file

// memangil function
use function file\data1\doa;        // mengimport function doa

// memangil const
use const filex\WNI;                // mengimport const dengan nama WNI


 // dengan kita menggunakan use , kita cukup diawal sekali saat import namespacenya
 $manusia = new Human();
 $manusia2 = new Human();

 var_dump($manusia);
 var_dump($manusia2);
 doa();





 //group use deklarasi

 //jika di dalam suatu namespace banyak class/function/const, kita juga akan banyak melakukan import use
//kita bisa sekaligus dengan mengguanakn group use deklarasi dengan { } seperti contoh dibawah ini
// use file\data1\{Human,Avenger,SuperHero}; 
// use funciton file\data1\{doa1,doa2,doa3}; 

//jadi kita bisa sekali tulis tarok semua class dari satu namespace , di dalam group use deklarasi
