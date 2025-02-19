<?php

//*trait inheritance
/**
 * selain class dan interface, trait juga mampu melakukan / mewarisi ke trait lain,
 * mirip seperti interface yang bisa menggunakan interface lain
 * 
 * cara menggunakannya sama seperti penggunaan trait pada class, dengan menggunakan keyword 'use'
 */


 namespace traits_inheritance;

 //trait satu dengan nama satu
 trait satu {
    var $info = "valid".PHP_EOL;
    function oke (){
        echo "oke dari trait satu";
    }
 }

 //trait dua dengan nama dua
 trait dua {
    function gas (){
        echo "gas dari trait info";
    }
 }

// trait dengan nama plus, menggunakanan / inheritance dari dua trai di atas
 trait plus {
    use satu, dua;
 }


 // class human menggunakan trait plus, dimana trait plus juga membawa semua warisan yang dia dapat dari trait yang dia gunakan;
 class Human {
    use plus;
 }


 $manusia = new Human;

 echo $manusia->info;
 $manusia->oke();