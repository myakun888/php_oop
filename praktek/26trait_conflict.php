<?php
//* trait conflict
/**
 * 
 * terkadang saat kita banyak membuat trait , ada keadaan kita membuat nama function / class yang sama yang sudah ada di dalam trait lain
 * 
 * ini akan menjadi bentrok ketika kita menggunakan dua trait tersebut di dalam satu class yang sama
 * 
 * tapi ini bisa kita atasi dengan kata kunci insteadof
 */


 include_once "data/trait_conflict.php";

 use data_info\{informasi, info}; // ini kita impor traitnya



 // kalau di lihat dari file trait nya , ini bentrok karena ada nama function yang sama, jadi php bingung yang mana mau di jalankan
 // ini kita selesaike dengan kata kunci insteadof, ini akan memilih yang mana yang akan di guanakan
 class data {
    use informasi, info{
        // untuk function A
        informasi::A insteadOf info; // artinya kita memilih function A, dari trait informasi, dari pada function A di trait info
        

        // untuk function B
        info::B insteadOf informasi; // artinya kita memilih function B, dari trait info, dari pada function B di trait informasi
    }
 
};

 $human = new data();

 var_dump($human);
 $human->A(); // informasi A, menjalankan function informasi dari trait A
 $human->B(); // info B, menjalankan info dari function 
