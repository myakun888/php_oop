<?php
//* destructor
/**
 * adalah function yang di panggil ketika object sudah tidak ada lagi di dalam memmory
 * 
 * 
 */

 include_once "data/Rasul3.php";

 $rasul = new Rasul3("MUHAMMAD SAW","SAW");

 echo "selesai".PHP_EOL;
 
 // setelah file ini berhenti baru funciton descturtor berjalan
 // dalam hal ini / contoh ini , function destruktor echo termikasih $this->
// untuk lebih jelas silahkan lihat di file class nya