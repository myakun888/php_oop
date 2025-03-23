# DateTime
biasa nya setiap bahas pemrograman sudah di sediakan cara untuk memanipulasi waktu, di PHP juga ada yaitu `dateTime`

adalah object bawaan dari PHP, berguna untuk memanipulasi waktu 
ada banyak sekali function di class dateTime yang berguna untuk memanipulasi waktu, kita bisa menggunakan sesuai kebutuhan
selain class dari datetime, ada juga function bawaan yang berguna untuk memanipulasi waktu;


## menggunakan class DateTime

karena dateTime adalah sebuah class maka kita harus membuat instance object nya terlebih dahulu

```php
$date_time = new DateTime();
```

dari contoh diatas kita sudah mengistansi object dari class DateTime, artinya kita sudah menginisiasi object dari waktu saat ini object itu dibuat
silahkan di debug
di var_dump

## beberapa method dar class DateTime

ada banyak metod dari class date time, ini kita akan membahas beberapa saja, untuk yang lain silahkan explore sendiri

|DateTime function | keterangan|
|------------------|-----------|
|setTime($hour,$minute,$second)| untuk men set waktu datetime, dalam bentuk jam, menit , detik|
|setDate($year,$month,$day)| untuk men set tanggal, hari , bulan dan tahun|
|setTimeStamp($unix timestamp)| untuk mengeset dengan unix timestamp|

```php

$date_time = new DateTime();



$date_time->setDate(2012 12 21)// tahun 2012, bulan 12, tanggal 21 

$date_time->setTime(08,30,10)// jam 08, menit 30, detik 10
```

    note : dalam paramter sebuah function di datetime ada banyak jenis , dan mempengaruhi hasil nya
    silahkan lihat dokumentasi nya



## Date Interval
- terkadang kita ingin menambah suatu waktu tertentu misal hanya ingin menambah tahun nya saja, atau menit nya saja
- ini kita bisa lakukan dengan function dari class DateTime , yaitu add()
- function add(),di dalamnya memiliki argument / parameter yang berguna segaai acuan berapa banyak interval yang kita tambah
-  parameternya berupa object Dateinterval() dengan pareemeter yaitu, periode, durasi, jeniswaktu nya
-  parameternya selalu di awali dengan P, yang artinya periode
- contoh DateInterval("P1M") artianya penamabhan periode 1 , M bulan atau 1 bulan
- contoh DateInterval("P1Y") artinya penambhan periode 1, y tahun atau 1 tahun

untuk bisa lebih detailnya bisa lihat dokumentasinya
[https://www.php.net/manual/en/dateinterval.construct.php]


```php
// saat coding ini dibuat , 05maret2025, 07.00
$date_time = new DateTime();

//ini kita langsung masukan di dalam paremter object nya
$date_time->add(new DateInterval("P1M")); // artinya kita menambahkan 1 bulan

var_dump($date_time) //05apr2025


//atau kita juga bisa membuat dengan cara
// kita deklarasikan / buat dulu diluar object ny
$dateinterval = new DateInterval("P1M");
//baru kita masukan ke dalam function add
$date_time->add($dateinterval);


```

### jika ingin mundur
kita bisa menggunakan properti invert


```php
// saat coding ini dibuat , 05maret2025, 07.00
$date_time = new DateTime();

$dateinterval = new DateInterval("P1M");// M artinya Month, D artinya date, Y artinya year
$date_time->add($dateinterval); // ini 05apr2025


$date_time-invert = 1 // kembali jai 05mar2025

```


## date timezone
- saat kita membuat function date time , maka secara otomatis kita membuat waktu saat ini berdasarkan lokasi time zone saat ini
- kita bisa mengubah configurasi nya di file `php.ini` , lokasi nya tergantung os 

    linux berada di `/opt/lampp/etc` <br> macos `/opt/lampp/etc` <br> windows di dalam file `xampp`
    
    buka file `php.ini` dengan code editor
    lalu cari keyword date
    ubah lokasi dan negara nya
    contoh jika indonesia bagian waktu indonesia barat (wib)
    ASIA/JAKARTA

- atau kita juga bisa menyetting nya dengan function `setTimezone()` untuk mengubah time zone nya

```php

// ini dengan style OOP
$date = new DateTime();
//dengan function setTimezone
$date->setTimezone(new DateTimeZone("ASIA/JAKARTA"))// dan paremter nya adalah object DateTimezone, dan paremeternya benua / kota



// cara ini kita deklarasikan dulu semua object nya
// kedua cara ini sama saja
$date2 = new DateTime();

$timezone = new DateTimeZone("ASIA/JAKARTA");
$date2->setTimezone($timezone)

```


## format DateTime

kita juga dapat mempresentasikan datetime dalam bentuk string, dengan format yang bisa tentukan agar user bisa membaca dengan baik di tampilan
untuk menggunakan ini kita bisa menggunakan function format()
ada banyak jenis paramter nya dimana setiap parameternya akan menampilkan bentuk yang berbeda 
sesuai kebutuhan yang kita inginkan

untuk detailnya bisa liat dokumentasinya
[https://www.php.net/manual/en/datetime.format.php]


```php
$date = new DateTime();

$date->setTimeZone(new DateTimeZone("ASIA/JAKARTA"));

//kita coba format

$date->format("Y-m-d H:i:s") // ini kita format dengan tahun, dan bulan ,hari jam dstr nya
//note setiap karakter besar kecil nya huruf memiliki tampilan atau format yang berbeda
//silahkan cek dokumentasi nya

```


## parse DateTime
selain melakukan parsing dari DateTime ke string kita juga bisa melakukan sebaliknya yaitu dari string ke datetime sesuai format yang kita mau
dengan menggunakan static function createFromFormat() dari class DateTime 

`DateTime::creatFromFormat($format,$waktu,$object_DateTimeZone("NEGARA/KOTA"))`

```php
$date = DateTime::createFromFormat("Y-m-d H:i:s", "1999-12-29 11:11:11", new DateTimeZone("ASIA/JAKARTA"));


var_dump($date);

```