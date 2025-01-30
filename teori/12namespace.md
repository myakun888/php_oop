# namespace

namespace adalah fitur dari php yang berguna untuk menampung nama-nama class,variabel fuc dall

karena saat kita membuat apliksi kemungkan akan terjadi nama yang sama
jadi untuk menghindari itu kita bisa menggunakan namespace



## membuat namespace
untuk membuat namespace cukup dengan
`namespace nama_namespacenya { #code }`

atau jika dialam satu file hanya ada satu namespace tidak usah gunakan tanda kurung kurawal, artinya di file tersebut hanya ada satu namespace


```php

//ini contoh dalam satu file ada lebih dari satu namespace
// yaitu dengan nama data dan data2;

namespace data {

class oke {

}
function doa () {

}
const TUHAN = "ALLAH";

}



namespace data2 {

class oke {

}
function doa () {

}
const TUHAN = "ALLAH";

}



```
jika ingin membaut subname nya ya tingaal tambkan saja tanda garis miring

```php
namespace data/satu {

}
```

### satu file hanya ada satu namespace

```php

//jika setelah namespace tidak ada tanda kurungkurawal maka satu file tersebut adalh satu namespace
namespace data2 

class oke {

}
function doa () {

}
const TUHAN = "ALLAH";


```


## membuat object dari namespace

memanggil namespace caranya kita gunakan di depan dari nama apa yang ingin kita panggil
`namaNamespace\namaClass()`
contoh kita akan memanggil namespace untuk membuat object dengan class manusia

```php
//kita asumsikan namespace nya ada di file data.php
//dengan nama data1, satu lagi dengan nama data2 dan 22 nya memiliki nama class manusia 
//dan ada class dengan nama manusia di dalam namespacenya


include "data.php"


$person1 = new data1\manusia()
$person2 = new data2\manusia()

// meski dengan nama class sama, tapi karena kita sudah menggunakan namespace jadi tidak error
```

## membuat const dan function dari namespace
selain class kita juga bisa membuat function dan const dari namespace;
```php
//kita asumsikan namespace nya ada di file data.php
//kita asusumsikan di dalam namespace data1 ada nama const TUHAN, dan function doa
//dan ada class dengan nama manusia di dalam namespacenya


include "data.php"

//memangilnya 
//namanamespace\namafunction ()
data1\doa ()  
//namanamespace\namaConst ()
echo data1\TUHAN;
```


## global namespace
secara default saat kita membuat code di php maka akan di simpan di dalam global namespace
global namespace adalah namespace yang tidak memiliki nama namespace;



```php
namespace {

    echo "hello world";
}

```