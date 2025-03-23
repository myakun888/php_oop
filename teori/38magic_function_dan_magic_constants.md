# magic function dan magic constants
- adalah function bawaan dari PHP, dan sudah di tentukan kegunaan nya
- kita tidak bisa merubah function tersebut karena sudah di tentukan kegunaan nya
- sebenarnya kita sudah beberapa kali menggunakan nya , diantaranya `__construct(), __dectruct(), clone,` dan masih banyak lagi



## __toString() function

to string function adalah respresentasi string terhadap object kita,

dengan mengunakan function tersebut object kita bisa di cetak dengan `echo`, karena secara default object akan di tampilkan sebagai array oleh var_dump, jika kita tidak di jadikan string, akan terjadi error saat melakukan echo, dengan kata lain hanya bisa di var_dump


```php

class manusia {
    public $nama = "mr bond";
    public $asal = "indonesia";
    public __toString(){
        return "nama: $this->nama\nasal: $this->asal";
    }
}


$mrbond = new manusia();

var_dump($mrbond)// 
echo $mrbond // ini error karena object secara default tidak bisa di cetak dengan echo , hanya bisa di vardump, agar bisa maka kita harus membuat functin __toString()
```

lihat contoh berikut
```php
class manusia {
    public $nama = "mr bond";
    public $asal = "indonesia";
//buat functio __toString()
public __toString(){
        return "nama: $this->nama\nasal: $this->asal";
    }
}


$mrbond = new manusia();
var_dump($mrbond) 
echo $mrbond
echo
```

## __invoke () function
- sebuah function yang akan di jalankan ketika object yang kita buat diangap sebagai function
- contoh ,kita membuat object dengan nama $ceo, lalu kita lakukan $ceo(), maka yang akan jalan adalah function __invoke 

```php
class manusia {
    public $nama = "mr bond";
    public $asal = "indonesia";
//function invoke


public __invoke(){
        echo "ini adalah function invoke";
    }
}


$mrbond = new manusia();

$mrbond(); // ini adalah function invoke
```

## __debuginfo() function

saat debugging kita biasa menggunakan var_dump, sebernya saat kita melakukan vardump yang dijalankan itu adalah __debuginfo() function

jika kita ingin mengubah isi dari debug info kita bisa menggunakan function __debug info()
note : debuginfo harus mereturn dalam bentuk arrah



```php
class manusia {
    public $nama = "mr bond";
    public $asal = "indonesia";
//function invoke


public __debuginfo():array
{

return ["nama"=>$this->nama,"asal"=>$this->asal];
    }
}


$mrbond = new manusia();

$mrbond(); // ini adalah function invoke


```

dan masih banyak lagi , magic function lainya

[https://www.php.net/manual/en/language.oop5.magic.php]


## magic constants
*note: materi ini tidak ada di slide materi dari pzn, ini tambahan silahkan lihat dokumentasi nya*

apa itu magic constants?
magic constants bawaan dari PHP , `dimana dia akan berubah nilai ny tergantung di mana lokasi constants tersebut di eksekusi`,
ini berbeda dengan constants biasa yang nilai nya tetap



- magic constants selalu diawali dengan __ (under score 2x) dan selalu dengan huruf besar atau case senstif , kecuali untuk magic constant *classname::class*
  

beberapa magic constants 

|name|fungsi|
|----|------|
| __LINE__ | fungsi mengambil baris saat ini|
|__FILE__ | fungsi mengambil lokasi path file saat ini|
|__DIR__ | fungsi mengambil lokasi direktori / folder saat ini|
|__FUNCTION__| fungsi mengambil nama fungsi saat ini, atau {clsore} jika fungsi tersebut anonimus|
|__CLASS__| fungsi mengambil nama class saat ini, termasuk nama thrait nya jika trait tersebut di gunakan di dalam class|
|__METHOD__| fungsi mengambil nama metod |
|__NAMESAPCE__| fungsi mengambil nama namespace saat ini|
|className::class| mengambil full dari nama class tersebut|



### __LINE__
akan menampilkan dimana lokasi line atau baris saat ini di berada
```php

 var_dump( __LINE__) // 139


 var_dump( __LINE__) // 142


```


### __FILE__

akan menampilkan lokasi path (absolut path) dari lokasi file ini berada

```php
$lokasi = __FILE__
echo $lokasi //  /home/dianwisora/learn/php_oop/teori/38magic_function_dan_constants_function.md

```


### __DIR__
menampilkan lokasi path (absolut path) dari direktori atau folder saat ini

```php

echo __DIR__ ///home/dianwisora/learn/php_oop/teori

```


