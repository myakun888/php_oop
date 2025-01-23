<?php
#properties
/**
 * adalah field/properti/atribute atau behavior yang menampel pada suatu instance object
 * membuat properties di php, seperti membuat variabel
 * diawali dengan kata kunci var lalu di ikuti dengan nama propertinya
 */

require_once "data/1person.php"; // kita impoer dulu clasnya



//properti bisa kita manipulasi, kita bisa beri / isi nilai / atau ubah nilainya

$person2 = new Person();//kita membuat object dari class person


//di kelasnya kan sudah kita kasih properti , kita akan coba manipulasi

$person2->nama = 'ronaldo';
$person2->alamat = 'portugal';


var_dump($person2->nama); //ronaldo

echo "Nama : {$person2->nama}".PHP_EOL; // ronaldo
echo "alamat :{$person2->alamat}".PHP_EOL;// portugal


//* propertis dengan tipe
// kita bisa menentukan tipe data apa yang kita ingin kan di propertis / properties type 
// dengan cara menulis tipe nya setelah kata kunci var
// var tipedatanya namapoperties


//* default properties value
// sama seperti funciton kita juga bisa menambahkan default value pada properties dengan cara menambhakan =  atau operator assign

//contoh
// var string $agama = 'islam';    , artinya default value dari properti agama adlaah 'islam';


//* nullalble properties
// kita juga bisa membuat properti object untuk dapat menerima tipe data null
// cara nya dengan menambahkan tandan ? pada depan variabel nya
var_dump( $person2->hobi);