<?php
// kita bisa membuat function pada object, sama seperti membuat propertis


include_once "data/1person.php";

$person2 = new Person ();

// function sama seperti function biasa, jadi bis a kita buat argument, bisa juga mengembalikan nilai, jadi bisa kita tangkap juga nilainnya



//memangil function

//sama seperti memangi properties
// $nama_objectnya->nama_functionnya();
$cek = $person2->doa("fajrin");

echo($cek);



