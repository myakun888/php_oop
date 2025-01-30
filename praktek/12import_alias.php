<?php
//*alias
//! ini kelanjutandari import use, jadi harus baca materi yang use terlebih dahulu

//saat kita mengimport namespace dengan use , kita cukup satu kali dia awal
//lalu bagaimana jika terdapat nama class/function/const yang sama ?? ini akan error
// tapi ini bisa diatasi dengan alias kata kunci nya adalah as
// alias adalah kemampuan membuat class/funciton/const dengan nama lain yang kita inginkan

// membuat alias, kita cukup menambahkan as nama_yangKitaInginkan

include_once "data/data2.php";

//* tanpa keyword as
// use file\data1\Human; // ini akan error karena nama class ny sama, 
// use file\data1\Human;


//* dengan keyword as
use file\data1\Human as humanData1; //ini tidak error karen sudah kita gunakan as , untuk membedakan namanya
use file\data2\Human as humanData2;
use function file\data1\doa as doa1;

    //saat memanggilnya sekarang sudah bernama humanData1crrf
$manusia = new humanData1();


## alias dalam group
//kita ajuga bisa menggunakan saat import ny secara group seperti contoh di bawah ini
// use file\data1\{Human as manusia,Avenger as marvel,SuperHero as super}; 

