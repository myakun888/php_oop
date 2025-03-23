<?php

//* covariance dan contravariance

/**
 * saat kita membuat absract class , kita wajib membuat / mengoverride di class kita jika kita menggunakan class tersebut
 * biasanya kita akan membuat sama seperti parent nya , baik itu argument atau returnya
 * 
 * 
 * * covariance
 * di php kita bisa sedkit berbeda
 * kita bisa mengoverride sebuah function dengan return value yang lebih spesifik , ini di sebut covariance
 * 
 * jika di bahasa pemrograman lain jika kita mengoverrid function abstrak return value nya harus sama sperti parent atau abstratc ny,
 * tapi di php tidak masalah walau tidak sama, 
 */

 // ini kita class animal dan child class nya kucing dan anjing
 class Animal {
public $name;
 };
 class Kucing extends Animal{

 } ;
 class Anjing extends Animal {

 };


 // inteface animal selter
interface animal_shelter {
    function adopt(string $name): Animal;
}

//ini yang di maksud covarian
class kucing_shelter implements animal_shelter{
    // dimana kita bisa mengembalikan return lebih spesifik
    // kalau return ny di ganti animal, tidak covariance, 
    // ini covariance
    function adopt (string $name): Kucing
    {

    $kucing = new Kucing();
    $kucing->name = $name;
    return $kucing;
 }

}

class anjing_shelter implements animal_shelter{
    // dimana kita bisa mengembalikan return lebih spesifik
    // kalau return ny di ganti animal, tidak covariance, 
    // ini covariance
    function adopt (string $name): Anjing
    {

    $anjing = new Anjing();
    $anjing->name = $name;
    return $anjing;
 }

}


$kucing_shelter = new kucing_shelter();
$kucing = $kucing_shelter->adopt("luna");


$anjing_shelter = new anjing_shelter();
$anjing = $anjing_shelter->adopt("dogy");
var_dump($kucing);
var_dump($anjing);


## contravariance
// kebalikan dari covarian,
// yaitu function child class yang membuat / mereturn argument yang lebih tidak specifik


class Makanan {

};
class Makanan_Hewan extends Makanan{

};

$whiskas = new Makanan_Hewan();
$makanan = new Makanan();

abstract class Hewan {
  public $name;

//ini kan Makanan_hewan argument nya
 public abstract function makan (Makanan_Hewan $food);
}


class Kucing2 extends Hewan{
    function makan (Makanan_Hewan $food){
        // echo "kucing makan ".get_class($food);
        echo "kucing makan , makanan kucing";

    }
}

// ini contravariance
class Anjing2 extends Hewan{
    //argument ini kita menggunakan parent nya makanan hewan , yaitu makanan
    function makan (Makanan $food){
        // echo "anjing makan ".get_class($food);
        echo "anjing makan, makanan semua";
    }
}

$kucing2 = new Kucing2();
$anjing2 = new Anjing2();
echo $kucing2->makan($whiskas).PHP_EOL;
echo $anjing2->makan($makanan);


//*note inti dari contravariance adalah kita bisa mengisi argument berupa parentclass, dari suatu object 
// atau kita bisa menggisi argument yang tidak spesifik

//*dalam penggunaan argument object , jika kita memasukan parent, kita bisa juga menggunakan child class ny juga

// ini tidak error ke22 nya
// echo $anjing2->makan($makanan);
// echo $anjing2->makan($makanan_hewan);

//*tapi jika di parameternya menggunakan child class , kita tidak bisa menggunakan parentnya
// echo "{$kucing2->makan($makanan)}".PHP_EOL; //kalau di ganti dengan object yang menggunakan parent class makanann, akan error