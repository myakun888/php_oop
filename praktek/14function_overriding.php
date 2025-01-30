<?php

//* function overriding
/**
 *adalah kemampuan class child membuat ulang function dengan nama yang sama yang telah di buat dari function parent class ny
 *atau secara sederhana ny saat kita membuat nama function sama dengan class parentya ,maka yang class parent akan di timpa oleh function child class nya
 * 
 * 
 */

 // parent class dengan nama class Rasul
 class Rasul {
    public $nama;
    public $agama = "islam";
    protected $asal = "arab";
    public function __construct($nama){
        $this->nama = $nama; 
    }
    
public function doa (){
    echo "bismillah Rasul ";
}

//* ini child class dengan nama class Nabi, yang di extends dari class Rasul
};

class Nabi extends Rasul{

    public function doa (){
        echo "bismillah Nabi";
    }
    

    
};


$nabi_allah = new Nabi("Muhammad SAW");

//saat kita mengakses function nya karena nama nya sama maka yang jalan adalah function saat in di class extends nya karena nama ny sama

//* mengakse function ovarrading , sama seperti mengakses function pada umumnya
$nabi_allah->doa(); //bismilah nabi?

//*note: saat kita mengoveride function di parentny jika di childny berbeda argument, maka akan terjadi error
//! pertanyaan nya? bagaimana jika kita ingin mengakses function parent nya , karena nama nya sama, ini akan dibahas materi selanjutnya "parents";
