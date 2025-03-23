<?php
//* object iteration
//di php object dari sebuah class adalah suatu tipe data yang bisa di iterasi 
/**
 * selain array, string , object juga bisa di iterasi
 * 
 * kita bisa melakukan iterasi di object dengan foreach , ini di gunakan untuk mengekspose properti dari dalam sebuah object
 * dengan visiblit public
 */

class obj_iteration
{
    public $satu = 'first';
    public $dua = 'second';
    private $tiga = 'third';
    protected $empat = 'four';
}

$cek_data = new obj_iteration();

foreach($cek_data as $properti => $value ){

    echo "properti : $properti, value : $value\n";
}

// dari contoh diatas saat kita iterasi dengan foreach yang keluar adalah properti dengan visblity public, 



//* iterator
/**
 * sebelumnya kita melakukan iterasi data dengan cara otomatis dengan foreach
 * dengan foreach ini hanya akan mengekspose visibility yang public
 * 
 * selain otomatatis kita bisa juga secara manual, melakukan iterator
 * tapi secara manual ini agak ribet
 * 
 * oleh karena itu disini kita akan menggunakan ArrayIterattor , yaitu iterator yang menggunakan array sebagai iterasi nya
 * 
 * agar class kita bisa di iterasi secara manual kita menggunakan interface iteratorAggregate dan kita cukup mengoverride function getiterator(), yang menggembalikan array iterator 
 */

class iterator_manual implements IteratorAggregate {
    public $satu = 'first';
    public $dua = 'second';
    private $tiga = 'third';
    protected $empat = 'four';

    function getIterator(): Traversable
    {
        $datax = [
            "satu"=>$this->satu,
            "dua"=>$this->dua,
            "tiga"=>$this->tiga,
            "empat"=>$this->empat,


        ];
$dataz = new ArrayIterator($datax);
return $dataz;
    }

}




$manx = new iterator_manual();

var_dump($manx);

