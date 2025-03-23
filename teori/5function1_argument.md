# function type argument pada oop

sebelumnya sudah pernah kita bahas pada materi php dasar, bahwa function pada php
memiliki fitur type argument
dimana kita bisa memasukan argument / parameter ny sesuai dengan type atau tipe yang kita tentukan

contoh tipe data yang bisa kita masukan seperti `int,array,string,float`

```php


function cek (string $data){

    echo "$data";
}

cek("informasi")

cek(6); // ini tidak bisa
```

dari contoh diatas kita sudah menentukan tipe data argument atau parameter nya adalah string
jadi yang masuk sebagai argument pada function diatas harus bertipe data string


## function type / tipe argument object
pada materi oop ini kita akan menjelaskan tipedata argument nya adalah `class / object `

```php
//class
class Manusia {

public $name;
public $asal;

}

//object nya
$orang_europe = new Manusia();
$orang_europe->name = "007";


// function yang memiliki argument / parameter dari class Manusia
function informasi (Manusia $data){

echo $data->name;

}


informasi($orang_europe); // 007

```

artinya function informasi hanya boleh di isi parameter dari instance object dari class Manusi