<?php
//* namespace
/**
 * saat kita membuat class terakdang kita ingin membuat dengan nama sama tapi untuk di gunakan berbeda
 * terkadang kalau terlalu banyak nama class kita akan susah untuk mengklasifikasinya
 * di php ada fitur namespace ini berguna untuk mengelompokan / atau seperti folder yang menampung nama nama class
 *
 */

 
 //* membuat object dari namespace
include_once "data/data2.php";
include_once "data/data3.php";
//kita tulisakna nama namespce di depan class nya
$manusia1 = new file\data1\Human(); // kita membaut object dari class human dengan nampespace file\data1\Human

$manusia2 = new file\data2\Human(); // memnuat object dari class human dengan namespace file\data2\Human

var_dump($manusia1);
var_dump($manusia2);

 
//* membuat function dan constan
// di dalam file itu ada function dan const
// sama seperti membnuat object kita cukup tuliska


// nama namespace nya\namaFunctionya atau namaNamespacenya\namaConstant
testing\doa();

echo filex\WNI;


//* contoh lain membuat func dan const
//dari contoh ini kita membuat namespace nya di file data/data3.php

//memangil namespace Hello, dengan function doa;
Hello\doa();
//memangil namespace Hello, dengan const tuhan;
echo Hello\TUHAN;