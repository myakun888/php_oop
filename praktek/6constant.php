<?php
#constant
//di php kita bisa membuat constant dengan dua cara
//1 dengan function define, 2 dengan keyword consts
//untuk php 7 keatas kita bisa menggunakan const


// di class selain kita bisa membuat properties kita juga bisa mwmbuat constant
//berbeda dengan properti , dimana properti jika kita mengakses dengan menyebutkan instace object nya, berbeda dengan constan dimana kita menyebutkan nama_class lalu di ikuti :: nama constan nya

require_once "data/Allah.php";

//membuat const
// dengan define funcution

define("TUHAN_MAHARAJA", "ALLAH SWT");

//memnbuat dengan kata kunci const
const TUHAN_MAHATINGGI = 'ALLAH SWT';


echo TUHAN_MAHARAJA.PHP_EOL;
echo TUHAN_MAHATINGGI.PHP_EOL;




//* membuat const pada class
// cukup tulis kewyoed const di ikuti nama const nya (tanpa tanda dollar, tulis di dalam block class nya)
// dalam contoh ini silahkan liaht di class Allah.php

//mengakses constant di dalam class
/**
 * tulis nama class::nama_constant
 */
echo Allah::MAHARAJA; // ya malik, karena di class nya berisi ya malik