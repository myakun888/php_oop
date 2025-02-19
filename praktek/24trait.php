<?php
//* trait
/**
 * selain class dan interface di php ada juga fitur trait
 * trait ini mirip class karena di dalam nya kita bisa memasang properti, konkrit function dan abstract function
 * yang membedakan trait dan class, trait bisa di tambahkan lebih dari satu ke dalam class,
 * trait ini secara sederhana adalah untuk menyimpan function function yang bisa di gunakan ulang di dalam class
 * untuk menggunakan trait kita gunakan keyword use
 */



 //* menggunakan trait dengan kata kunci use namatraitnya di dalam block eksekusi class nya { }
namespace belajar_trait;

//nama trait1 nya data
 trait data {
    //properti
    // public $informasi;

    function doa (){
        echo "bismillah";
    }

 }


 //nama trait 2
 trait data2 {
    function doa2() {
        echo "bismillah 2";
    }
 }



class Manusia {
    use data; // 
}

$manusia = new Manusia();
var_dump($manusia);


//* trait poperti
// berbeda dengan interface tidak bisa membuat properti, trait bisa membuat properti
// trait juga bisa membuat properti di dalam nya , dan juga abstract function

// trait dengan nama data3
// kita isi dengan properti dan abstract function
trait data3{

    public $informasi;
    abstract function oke (); // jika ada abstract function , wajib overide di class yang memaikanya 
};

class Manusia2  {
    use data3;
    function oke (){
        echo "dari class manusia 2";
    }
}

$manusia_ke2 = new Manusia2();

//menggunakan trait propertis
$manusia_ke2->informasi = "aktiv";
var_dump($manusia_ke2);