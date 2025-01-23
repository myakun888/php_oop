<?php

class Rasul2 {
const TUHAN = "ALLAH SWT";

function iman (){
    echo "tuhan saya adalah ".Rasul2::TUHAN.PHP_EOL; // cara pertama
    echo "tuhan saya adalah ".self::TUHAN.PHP_EOL;// ini menggunakan self keyword

    
}

};

//kedua cara itu bisa, self lebih simple, 
// self ini mirip dengan this, jika kita menggunakan untuk mengakses properti dari object saat ini, 
// jadi self itu pengganti class, yang di gunakan untuk mengakses constant dari objeck saat ini

// $nabi = new Rasul2();

// $nabi->iman();