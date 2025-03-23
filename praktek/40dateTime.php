<?php
//* DateTime
/**
 * adalah class bawaan dari PHP yang berguna untuk memanipulasi waktu
 * untuk menggunakan ada beberapa cara y
 * bisa secara prosedural dan object
 * 
 * karena ini materi OOP(object oriented programming) jadi kita menggunakan cara object, object style
 */

$date = new DateTime();
//saat kita membuat object dari class DateTime(), artinya kita memnbuat object dari waktu saat ini
var_dump($date);
// ada banyak juga datetime function yang kita bisa gunakan dari class DateTime
/**
 ** diantaranya setTime($jam,$menit,$detik) -> ini berguna untuk men set / mengubah waktu datetim
 */
$date->setTime(20, 18, 10); // artinya ktia men set waktu saat ini dengan jam 20, menit 28 detik 10

//* setDate($tahun,$bulan,$hari)
$date->setDate(2022, 12, 21);

//setTimestamp($unixTimestam), mengubah waktu dengan unix timestamp
//note : unix timestamp adalah detik yang berlalu / berjalan sejak 01 januari 1970


//* DateInterval
// kadang kita ingin memanipulasi waktu , tapi ingin memanipulasi sebagian saja, misal nya hanya memanipulasi hari saja, atau jam , tahun nya saja
/**
 * kita bisa menggunakan function add milik DateTime,
 * namun function tersebut menerima parameter dari class DateInterval
 * 
 * saat menggunakan nya kita perlu menentukan berapa banyak kita menambah interval nya
 * dan untuk membuat durasi harus diawali dengan 'P', yang berarti periode
 */

$date2 = new DateTime();
$date2->setDate(2023, 10, 21);
//date2 , kita buat dengan waktu , tahun 2023, bulan 12, 21
var_dump($date2->format("Y")); // ini kita ambil tahun nya y 2023
// lalu di sini kita tambah 1 tahun
$date2->add(new DateInterval("P1Y")); // ini artinya kita menambahkan 1 tahun
var_dump($date2->format("Y"));

//* selain menambah kita juag bisa melakukan mengurangi dengan prperti invert

$date_kurang = new DateInterval("P1M");
$date_kurang->invert = 1; //TODO buat komentar pada baris ini untuk melihat perbedaan nya , lalu var dump
$date2->add(($date_kurang));
var_dump($date2->format("Y")); // harus ny ini 2025, karena ini di invaert maka berkuarng satu




//* DateTimeZone
/**
 * saat kita membuat object datetime dia akan otomatis membuat time zone atau zona waktu sesau time zone atau zona waktu yang di setting pada configurasi date timezone di file php.ini
 * * untuk os linux dan mac os , file nya berada di 
 * /opt/lampp/etc/php.ini
 * lalu cari kata kunci date, ubah benua dan time nya, contoh untuk indonesia WIB, benua dan timenya adalah "ASIA/JAKARTA"
 * dan untuk melihat zone dan kota nya bisa lihat di googel atau dokumentasi php nya
 * 
 *  
 * atau kita juga bisa mengubah timezone dengan cara prosedural atau dengan funciton setTimeZone dengna parameter nya dari  class DateTimeZone , silahkan gunakan dari kedua style coding itu prosedural atau oop
 */

//ini kita contohke merubah dengan class DateTimeZone


$date3 = new DateTime(); // ini masih default, masih timezone "EUROPE/BERLIN";
var_dump($date3);

//object dari class DateTimeZone
$timezone = new DateTimeZone("ASIA/JAKARTA");
// kita ubah dengan function setTimezone
$date3->setTimezone($timezone); // memerlukan parameter berupa object dari DateTimeZone

//atau dengan cara tanpa deklrasi object , dimana object nya langsung masuk ke parameter
$date4 = new DateTime();
$date4->setTimezone(new DateTimeZone("ASIA/JAKARTA")); //ini sama saja bedanya hanya langsung di parameter object ny



# format dateTime
/**
 * kadang kita ingin membuat data dalam fomrat string dari DateTime yang sudah kita buat
 * ini bisa kita lakukan dengan menggunakan function format(),
 * function ini menerima argument berupa format string , ini bisa di gunakan untuk memanipulasi cara kita menampilkan string format waktu
 * 
 * contoh "H" -> menampilkan format jam dalam bentuk 24jam, "h" -> dalam bentuk jam 12 jam
 * dan lain lain bisa lihat di dokumentasinya
 * 
 */

$date5 = new DateTime();
$date5->setTimezone(new DateTimeZone("ASIA/JAKARTA"));

//kita akan tampilkan dalam bentuk string
echo $date5->format("H:i:s d-m-Y") . PHP_EOL; //dalam bentuk jam:menit:detik hari-bulan-tahun
//jika ingin mengambil bulan nya saja
echo $date5->format('M') . PHP_EOL; // bulan dalam bentuk nama

//cara diatas adalah style oop
//jika ingin cara prosedural sbg berikut
echo date_format($date5, "H:i:s");

//* Parse DateTime
/**
 * selain format datetime menjadi string ,php juga bisa melakukan sebaliknya
 * yaitu melakukan string menjadi datetime sesuai format yang kita mau
 * 
 * untuk melakukan ini bisa dengan static function dari class DateTime
 * yaitu createFromFormat()
 */



$date6 = DateTime::createFromFormat("Y-m-d H:i:s", "2000-12-20 10:10:10", new DateTimeZone("ASIA/JAKARTA"));

// var_dump($date6);
$hasil = (object)$date6;

// echo $hasil;
var_dump($hasil);
var_dump($hasil);
