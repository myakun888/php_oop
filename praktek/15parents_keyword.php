<?php
//* parents keyword
/**
 * secara sederhana parents keyword adalah kata kunci yang digunakan ketika kita ingin mengakses function yang nama nya sama / di timpa  / overriding oleh class child nya
 * 
 * saat kita membuat function dengan nama function yang sama dengan parents class nya , kita tidak bisa mengakses nya
 * unutk mengakses nya kita gunakan kata kunci parents
 */

class Rasul
{
    const TUHAN = "ALLAH";
    public $agama = "islam";

    public function __construct($agama = "islam")
    {

        $this->agama = $agama;
    }

    public function doa(): void
    {
        echo "ya rasulallah ";
    }
}


// class child dari class rasull
class Nabi extends Rasul
{
    public function doa($arg="cinta allah"): void
    {

        echo "ya nabi allah $arg".PHP_EOL;
    }

    public function doa__rasul()
    {

        parent::doa();
    }
}


$nabi_allah = new Nabi("ISLAM"); // membuat object dari classs nabi
var_dump($nabi_allah);
$nabi_allah->doa(); // ya nabi allah;
$nabi_allah->doa__rasul();// ya rasul allah, ini mengakses function doa yang ada di parent class nya , dalam contoh ini parent class nya adalah Nabi



//* perlu di ingat
/**
 * saat kita membuat function dengan nama yang sama dari class parents nya , pastikan format ny sama jika ada argument , yang di child nya ada argument juga, karena jika tidak sama, memang tidak terjadi error tapi akan ada warning (itu di php 7)
 */