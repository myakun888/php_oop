# stdClass

adalah class bawaan dari php (class kosong) yang di gunakan untuk mengconversi suatu tipe data lain menjadi object

ini sangat berguna untuk menggubah tipe data array menjadi object


contoh

```php

// ini kita contoh array
$data = [
    "nama"=> "muhammad",
    "gelar"=> "SAW";
];


$rasul = (object)$data;

var_dump($rasul)
```