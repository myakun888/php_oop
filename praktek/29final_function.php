<?php
//* final function
/**
 * selain di class , kata kunci final bisa juga kita gunakan pada function
 * jika di class efek nya class tidak bisa melakukan inheritance
 * tapi jika pada function, ini akan menyebabkan function tersebut tidak bisa di override di child class nya
 * 
 * fitur ini bisa kita gunakan, dimana jika kita ingin mengunci sebuah function / method agar tidak bisa di ubah lagi oleh child class nya
 */


 class Facebook {
   final function koneksi (){
return "cek koneksi";
    }
    function info (){
        return "info dari facebook";
    }
 }


 class Instagram extends Facebook{

    //function info tidak error, saat kita override karena function nya tidak ada kata kunci final
    function info (){
        return "info dari Instagram";
    }

    //ini error karena function koneksi , kita buat final (lihat parent class nya)
    //todo untuk melihat error hapus komentar pada code di bawah ini
    // function koneksi (){
    //     return "koneksi dari Instagram";
    // }
 }