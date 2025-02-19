<?php
//* anonymus class
/**
 * adalah class tanpa nama
 * 
 * dimana kita mampu membuat class sekaligus menginisais suatu objetc tanpa harus mendklarisakan  class nya
 * 
 * ini kita bisa gunakan jika kita ingin membuat object tapi tidak ingin membuat class nya, jika kita hanya untuk menggunakan interface
 * atau class abstact, trait tapi tidak ingin membuat / mendklarsikan class nya
 * 
 * * secara sederhana kita bisa membuat oject dari suatu class tanpa harus membuat / mendlarasikan class nya 
 */


 namespace anonymus_class;

$Manusia1 = new class {

};

//kalau kita var_dump ini akan terlihat kalau objetct ini di instance dari anonymus class
var_dump($Manusia1);

//>>>>>>>>>>>>>>>>>>>>>>>

 interface sayHello {
    function sapa();
 };

 //objetct manusia dengan anonymus class yang mengimplentasikan interface
 $manusia = new class implements sayHello {

    function sapa(){
        echo "hallo guys";
    }
 };

var_dump($manusia);


//* construcktur pada anonymus class
/**
 * anonymus class bisa juga menenrapkan constructur 
 */


 
 $manusia_2 = new class("james bonds"){
    public $name ;
    function __construct($nama)
    {
        $this->name = $nama;
    }
 };
// untuk parameter nya langsung di buat di dalam class anonymus ny

 var_dump($manusia_2);
 echo $manusia_2->name;