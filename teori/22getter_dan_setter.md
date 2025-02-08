# getter dan setter


## encapsulation

**artinya menyembunyikan data senstif dari luar**, 
 sepert konsep kapsul
ini bertujuan agar data tetap valid dan baik
agar sebuah data penting / senstif tidak mudah di akases atau diubah dari luar kita biasnya membuat visiblitynya menjadi **private**

agar bisa di ubah dan diakses properti tadi,kita harus membuat function untuk mengubah dan mengakses properti tersebut


## membuat getter dan setter
- di php untuk membuat encapsulation sudah ada standrisasi nya, dimana kita bisa menggunakan / membuat function getter dan seeter
- function getter untuk mengambil properties
- function setter untuk mengubah data properties


**berdasarkan tipe datanya sebagai berikut**

|tipe data | getter method  | setter method|
|----------|----------------|--------------|
|boolean   | isNamaMetod() | setNamaMetod()|
|tipe data lainya | getNamaMetod() | setNamaMetod()|

artinya:
jika suatu data adalah boolean maka get metod nya adalah is


```php

class manusia {
    // pada contoh ini data nya kita buat null semua
private $statusAktiv = null; 
private $alamat = null ;


//getter boolean data
function is_statusAktiv (){
   echo " $this->statusAktiv;"
}
// setter boolean data
function set_statusAktiv (bool $nilai){
    $this->statusAktiv = $nilai
}


//getter bukan / selain boolean data
function get_alamat (){
   echo " $this->alamat;"
}
// setter bukan / selain boolean data
function set_alamat ($alamat){
    $this->alamat = $alamat
}


}

$agen = new manusia()

// kita set data yang boolean
$agen->set_statusAktiv (true) // agen.statusAktiv menjadi true
// kita get data yang boolen
$agen->is_statusAktiv(); // true;



// kita set data 
$agen->set_alamat("indonesia"); // alamat kita set menjadi "indonesia"
// kita get data
$agen->get_alamat(); // indonesia

```


sekilas memang terlihat akan banyak function , karena kita membuat get dan set seperti ini

karena sudah ada get dan set, kita jangan lagi menggukan properti nya langsung untuk mengakses 
seperti $manusia->$nama

secara tidak langsung kita sudah menerapkan konsep `encapsulation` pada php
