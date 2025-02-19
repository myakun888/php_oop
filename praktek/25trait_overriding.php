<?php

//* trait overriding
/**
 * di trait juga bisa kita overriding 
 *
 */



//* trait abstract function
/**
 * di dalam trait selain kita bisa membuat konkrit function kita juga bisa membuat abstract funtion
 * yang artinya kita wajib mengoverid function ny di class nya
 * 
 */

 namespace trait_overriding;

use Human as GlobalHuman;

 trait abstract_function {
 abstract function abs ();
} ;

class Man1 {
    use abstract_function;
    function abs (){
        return "ini dari trait abstract function";
    }
}
$man1 = new Man1 ();
var_dump($man1->abs());

//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

//* trait overriding
/**
 * jika sebuat parent class memiliki functiion yang sama , dengan yang di trait maka function yang ada di class akan di overrid oleh traid
 * namun jika child class memiliki nama yang sama maka trait akan di overrid oleh child class 
 */


 // kita akan buat perbandingn 2 case

 //case satu , ini normal
trait datax1 {
    function oke (){
        return "dari trait datax1";
    }
};


class Human1 {
    use datax1;
function oke (){
    return "ini dari class human";
}

}
$manusia = new Human1();
var_dump($manusia->oke()); // ini menjalankan function dari class human




// case 2, perhatikan penjelasan yang di jabarkan di atas

trait trait_override_2{
    function gas (){
        return "ini function gas, dari trait override 2";
    }
};

class Human2 {

    function gas (){
        return "ini function gas, dari class human 2";
    }
}

class Manusia extends Human2 {
    //ini akan menjalankan function yang di trait override 2
    //yang di class di override / di timpa oleh traid
    use trait_override_2;
    
    //todo
    //jika ingin menimpa yang di trait, maka di child class , kita buat function sama , agar kita overrid yang dari trait ny
// hilangkan komentar pada function di bawah ini
// function gas (){
//     return "ini function gas, dari child class manusia";
// }
}

$manusia2 = new Manusia ();

var_dump($manusia2->gas());


// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
//* trait visiblity override
/**
 * di trait kita juga bisa melakukan override visisblity
 * misal nya di trait kita setting public
 * tapi di class yang ktia ingin gunakan kita ingin visiblity ny menjadi nya private/proctected atau sebalik nya kita ingin merubah menjadi public
 * 
 */

 trait trait_visiblity {

    //* ini visibilty ny public
    public function cek(){
        return "ini function cek dari trait visiblity";
    }
 }

 class Human3 {
    use trait_visiblity{
        //* disini kita ubah jadi private
        cek as private; // seblum ny public tapi di ubah di sini menjadi private, liat function cek diatas nya
    }
 }

 $manusia3 = new Human3();
 
 //todo silahkan hapus komentar dibawah ini
 //var_dump($manusia3->cek());  // error , karena yang sebelunya public , tapi kita ubah jadi private visbilitynya mdui class human3