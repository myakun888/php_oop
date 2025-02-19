<?php
//* static keyword
/**
 * adalah suatu keyword yang di gunakan pada class untuk membuat suatu proprerti atau method menjadi static, artinya proeprti atau function tersebut menjadi menempel pada class
 * tidak lagi menempel pada instance object dari class tersebut
 * 
 * untuk mengakses nya sama seperti saat mengakses constant, 
 * menggunakan class nya dan operator ::
 * 
 * static function tidak bisa mengakses function biasa karena function biasa itu menempel pada class instance objectnya 
 * 
 */


 class Rasul {
    static public $gelar = "AS";

 }

 $muhammad_saw = new Rasul ();

 var_dump($muhammad_saw);

//ini error, karena properti gelar kita set static , jadi kita harus menggunakan class untuk mengakses properti static tersebut
// echo $muhamamd_saw->gelar;


// mengakses static prpoperti atau static method
// classnya::$properti/$metodnya
echo Rasul::$gelar;// AS













