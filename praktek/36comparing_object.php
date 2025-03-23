<?php

//* comparing object
/**
 * adalah membanding object (dari class yang sama) menggunakan operator equals ==,
 * dan operator identity ===
 * 
 * equals ==, adalah membandingkan object dari class yang sama , yang di bandingkan adalah properti dan juga isi dari propertinya sama atau tidak
 * identity ===, adalah membandingkan object apakah object tersebut identik , mengacu ke object yang sama
 * 
 * 
 * 
 */


 class Man_1 {
    public $nama = "indonesia";
    public $benua = "sia";
 }

 class Man_2 {
    public $nama = "indonesia";
    public $benua = "asia";
 }

 $man1x = new Man_1();
 $man1y = new Man_1();

 var_dump($man1x == $man1y);
 var_dump($man1x === $man1y);

