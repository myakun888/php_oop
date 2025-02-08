<?php

//* type check and cast

/**
 * pada materi seblumnya kita sudah tau ya untuk cek type data selain object , banyak cara diantaranya
 * dengan menggunakan is function,
 * contoh jika kita ingin mengecek tipe data string atau bukan denga is_string($data);
 * 
 * untuk class , kita bisa dengan menggunakan keyword instanceof
 * ini berguna untuk mengecek suatu object berasal dari class apa
 * ini mengembalikan nilai boolean
 * 
 */



 class Manusia {
    public $name;
 public function __construct($nama) {
    $this->name = $nama;
}
 }

 $laki = new Manusia("human");

 //
 var_dump($laki instanceof Manusia); //true , karena $laki adalah intanse object dari class manusia

 // atau jika kita buatkan function 

 function cek ($data){

    if($data instanceof Manusia){
        echo "$data->name benar objec dari class manusia / instanceof dari class manusia".PHP_EOL;
    }
 }


 cek ($laki);

 // intsanceof juga akan tetap menggembalikan nilai true , jika sutu object dibuat dari class turunannya nya atau inheritance

 class Mukmin extends Manusia{

 }
 $muslim = new Mukmin("manusia");

var_dump($muslim instanceof Mukmin); //true, karena muslim memang instance off dari class mukmin
var_dump($muslim instanceof Manusia); //true, karena muslimm di buat dari class mukimn dimana class mukmin adalah turunan dari class manusia

