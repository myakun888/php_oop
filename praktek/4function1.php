<?php

//* function type argument 
/**
 * sebelumnya sudah pernah di bahas pada materi php dasar, 
 * kita dapat menentukan tipe argument / tipe data argument atau parameter dari sebuah function
 * diantarannya string,int,floa,array
 * 
 * 
 * selain tipe di atas kita juga bisa menggunakan dengan class /object
 * 
 * di sini kita akan bahas 
 */

class Human1
{
    public $name;
    public $asal;
}

$ronaldo = new Human1();
$ronaldo->name = "ronaldo";
$ronaldo->asal = "portugal";
var_dump($ronaldo);

function cek_info(Human1 $data)
{

    echo $data->name;
}


echo cek_info($ronaldo);

//jadi dengan kita menentukan tipe argument berupa instance object dari class Human1
// maka function cek_info parameter nya harus object dari class Human1