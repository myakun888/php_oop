<?php
//this adalah , cara mengakses, atau mengambil properti dari "OBJEK SAAT INI";

//kita import dulu class nya dari kelas rasu


include_once "data/Rasul.php";


// kita buat objek ny

$muhammad_saw = new Rasul();

$muhammad_saw->name = "muhammad saw";
$muhammad_saw->asal = "arab";


$khidir = new Rasul();

$khidir->name = "kidir as";

$khidir->cek($khidir->asal);

$khidir->asal = 'arab';
$khidir->cek($khidir->asal);

$muhammad_saw->cek($muhammad_saw->asal);
