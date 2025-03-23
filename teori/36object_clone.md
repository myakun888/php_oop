# object clone

kadang kita ingin menduplikasi suatu object, kita harus membuat object baru dan menyalin semua propertinya 
ini akan memakan waktu membuat nya

untung di PHP mendukung object clone, jadi kita bisa dengan mudah menduplikasi suatu object dengan menggunakan clone

`$objectbaru = clone $objectYangInginDiclone`



```php
class asia {
    public $ras
    ;
    public $kulit;
}

$china = new asia();
     $china->ras= 'asia';
     $kulit->kulit = 'kuning';


$china2 = clone $china // ini secara otomatis object china2 memiliki semua properti china

```


## __clone()  function

terkadang memang kita ingin mengclone sebuah object tapi tidak semua nya
ini bisa kita custmize dengan function __clone(){}
lalu di dalam function __clone ini kita bisa melakukan customize apa yang akan kita lakukan , misal (menghapus, menambah dll) sisa nya baru akan yang di lakukan clone ke object yang melakukan clone

function __clone ini akan di panggil di object yang melakukan clone, setelah hasil duplikasi selesai di lakukan

contoh kita ingin menghapus beberapa properti ketika di clone

```php
class asia {
    public $ras
    ;
    public $kulit;

    function __clone(){
        unset($this->$kulit);
    }
}

$china = new asia();
     $china->ras= 'asia';
     $kulit->kulit = 'kuning';


$china2 = clone $china

```

jadi kesimpulan nya
jika kita ingin mengcustum (menambah/menghapus), di dalam function __clone(){} tersebut
function clone ini akan di jalankan pada object hasil duplikasinya
