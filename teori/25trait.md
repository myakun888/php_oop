# trait
- selain class dan interface , PHP juga memiliki fitur trait
- trait ini mirip dengan abstrack class, dimana di trait bisa membuat properties , serta function konkrit(function biasa), dan abstract function
- yang membedakan trait dengan class kita bisa memasukan / menambahkan lebih dari satu trait ke dalam class
- trait mirip extension , dimana kita bisa menambahkan konkrit funtion kedalam class dengan trait
- secara sederhana trait itu tempat menyimpan function2x yang kita bisa gunakan ulang di beberapa class
- untuk menggunakan trait kita menggunakan keyword `use`

> note : <br>
konkrit function adalah functoan biasa seperti umumnya


```php
namespace datainformasi;

//trait
trait informasi{
//kita juga bisa membuat properti di dalam trait

// public string $data;
    function doa (){
        echo "bismillah ya allah swt";
    }
}



// menggunakan trait, menggunakan use nama trait nya
// jangan lupa kalau dia di file lain/ di luar , harus di exoprt dulu
class Rasul {
    use informasi // maka semua method yang ada pada trait informasi akan masuk pada class Rasul;
}
```

## trait properties

- trait bisa menambahkan properties, maka secara otomatis class yang mengunakan trait tersebut akan mewarisi properti di dalamnya
- menggunakan, memangil , properti pada trait sama seperti properti pada umumnya

```php
trait datafile {
public string $alamat;

}

class person {
    use datafaile,
}
// maka class person otomatis mendapatkan propertis yang ada pada trait datafile



$manusia = new person()

//*
$manusia->data = "oke" // mengisi properti data 
echo $manusia->data // oke
```