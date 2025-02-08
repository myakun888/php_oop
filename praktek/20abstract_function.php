<?php

//* absatract function
/**
 * selain class function php juga bisa membuat abstract function
 * 
 * saat kita membuat abstract function kita tidak perlu membuat block kode eksekusi nya { }
 * lalu di class childnya kita wajib memgoveride function tersebut
 * abstract function visiblity ny tidak boleh di override
 * 
 * abstract funtion dapat kita manfaatkan menjadi contrak pada class child nya
 */


abstract  class MakhlukGaib {
    // abstract funciton visibiliy nya tidak boleh private
    abstract public function doa (); // kita tidak perlu membuat blok eksekusi {}
 }

 class Malaikat extends MakhlukGaib{

    //pada class child ny kita wajib mengoverride abstract function nya
    public function doa (){
        echo "bismillah ";
    }
 };


 $jibril = new Malaikat();

var_dump($jibril);

//cara memanggil function nya, sama seperti memangil properti / function pada umumya
$jibril->doa();