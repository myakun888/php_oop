# overloading
- pada php overloading adalah kemampuan membuat properti atau function secara otomatis
- ini mirip meta pada bahasa pemrograman ruby
- tapi ini berbeda dengan function overloading pada bahas pemrograman java
- overloading ini erat kaitan nya denga magic function


## properties overloading

saat suatu properti di akses, maka object yang bersangkutan akan mencari properti yang di akses oleh user dan memberikan nya , jika properties tersebut ada

lalu bagaimana jika suatu properti itu tidak ada saat di akses??
dalam proses nya php tidak langsung memberikan error, tapi php mencari dahulu magic function atau melakukan fallback ke magic function
jika tidak ada baru memberi error

karena pada prosesnya mencari dahulu magic function, maka kita bisa memamfaatkan hal tersbut menajdi properti dinamis

**ada beberapa magic function yang bisa di gunakan menjadi properti overloading**

|magic function |keterangan|
|---------------|----------|
|__set($name,$value):void| dieksekusi ketika mengubah / set function tidak tesedia|
|__get($name):mixed| dieksekusi ketika mengambil function yang tidak tersedia|
|__isset($name):bool| dieksekusi ketika mengecek isset() atau empety() properti tidak tersedia|
|__unset($name):void| dieksekusi ketika menggunakan unset() properties yang tidak tersedia


#### contoh kode propeti overloading

disini kita akan membuat propeti dengan tipe data array, dengan visibility array nya private


```php


class data{
//dalam contoh ini kita membuat properti dalam bentuk array,
// properti bisa dalam bentuk tipe data appun;
private array $properti = [];

function __get($key){
    return $this->$properti[$key]
}

function __set($key,$value){
    return $this->$properti[$key]=$value;
}

function __isset($key){
    return isset($this->$properti[$key];)
}

function __unset($key){
    unset($this->$properti[$key])
}
}

$manusia = new data();

$manusia->tuhan = "allah";
$manusia->agama = "islam";



```
dengan kita membuat properti overloading yang memanfaatkan magic function (__set, __get, __isset, dan __unset), kita bisa membuat properti yang lebih dinamis


jadi pada intinya ini akan di jalankan ketika saat kita men get data, atau set data tapi tidak ada maka magic function tersebut yang akan di jalankan



## function overloading

mekanisme nya sama seperti saat kita membuat properti overloading kita memangfaatka magic funtion

saat kita memangil function pada instance objet, atau static function
maka php akan memangil function tersebut jika ada, jika tidak ada maka php akan fallback ke magic function, yang di panggil adalah magic funtion __call() dan __callstatic

dimana __call adalah function biasa, dan static adalah function static

|nama|fungsi|
|----|------|
|__call($named, $argument):mixed| di eksekusi ketika memanggil function yang tidak tersedia|
|__staticcall($named, $argument):mixed| di eksekusi ketika memanggil static function yang tidak tersedi|


```php


class info {

    public function __call($named, $argument){

echo "memangil function $named, dengan argumen";
    }
}


public static function __staticcall($named, $argument){

    echo "memanggil function static $named, dengan $argument";
}




$man = new info();

//tidak ada function cek, yang di panggil adalah function __call
$man->cek("informasi") // memangil funciton cek , dengan argument informasi;


//tidak ada static function, yang di panggil function __staticcall 
info::cekdata("manusia")// memanggil static function cekdata , dengan argument manusia'
//ini kan tidak ada funciton
```