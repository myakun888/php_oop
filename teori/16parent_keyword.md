
# parent keyword
saat kita membuat function di class turunan / child class dengan nama yang sama dengan parent class ny, maka secara otomatis class child ny tidak bisa mengakses function dari parent , karena nama nya sama, atau secara sederhana function tersebut telah di timpa

lalu bagaimana jika kita ingin mengakses class parent nya jika sudah di timpa?
kita bisa menggunakan kata kunci `parent`
sederhana nya parent di gunakan untuk mengakses class parent


## cara menggunakan nya

kita bisa buat function biasa lalu di dalam ny kita panggil ulang dengan menggunakan parent

`parent::namaFunction`



```php

class Nabi  extends Rasul{

public  function doa (){
return 'bismillah rasul';
    }

public function nabi_1 () {
echo "bismillah";

}

}


//child class
class Nabi  extends Rasul{

public function doa (){
    echo "bismillah nabi";
}

public  function nabi_1 (){
return parent::doa() //bismillah rasul
 // mengakses /memanggil function doa yang ada di parent class
    }
}

$nabi_allah = new Nabi();
$nabi_allah->doa() // ini menjalankan func dari child class (sudah menimpa parent class ny)
$nabi_allah->nabi_1() // ini menjalankan func child yang juga memangil parent nya (silahkan cek kode ny)

```


resume
- jadi gunakan kata kunci parents, saat kita ingin mengakses function nama nya di timpa / sama oleh function child nya
dan cara memanggilny buat dlu function biasa lalu panggil dari dalam dengan kata kunci parents::namaFunctionnya
tinggal kita panggil dari luar seperti biasa

- **secar sederhana parent adalah kata kunci yang di gunakan untuk mengakses class parents**