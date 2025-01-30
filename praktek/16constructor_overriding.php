<?php

//* constructor overriding
/**
 * selain func overidding kita juga bisa mengoverid construc,
 * saat mengoveride di sarankan / di rekomendasikan kita tetap memanggil construc parent , karena takut ada funct yang harus di eksekusi dari class parentya
 * 
 * memang tidak wajib, tapi derekomendasikan 
 */


 class Rasul {
    public $agama;
    public $nama;
public    function __construct($keyakinan,$nama)
    {
      $this->agama = $keyakinan;  
      $this->nama = $nama;  

    }
 }

 class Nabi extends Rasul {

    function __construct($nama)
    {
        parent::__construct("islam",$nama); // ini tetap kita panggil construck parent class nya
    }

 }
 $ibrahim_as = new Nabi("ibrahim");

 var_dump($ibrahim_as);


 //* contoh kalau kita tidak panggil
// saat kita mengoverrie construk , dan tidak kita jalankan construk parent nya , maka properti yang menjadi turunan dari parent nya akan berisi null

 class Wali extends Rasul {
    public $name;
    function __construct($nama)
    {
        $this->name = $nama;
    }
 }

 $wali_allah = new Wali ("syech");

 var_dump($wali_allah); // untuk properti dari parent class ny akan menjadi null, karena tidak di isi




