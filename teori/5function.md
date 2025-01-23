# function
selain properties , kita juga bisa menambahkan function,
menambahkan function sama seperti membuat properties
kita cukup tambahkan di dalam block class nya

- kita juga bisa membuat return value dan parameter seperti pada umumnya

- mengakses function $nama_object->nama_fuctionnya
  sama seperti mengakses propertis

```php

class person {
    $data;
    function doa (string $name){
        echo "$name, membaca bismillah";
    }
}



```



### memangil function

```php

$person2 = new Person();

$person2->data="indonesia";
$person2-doa("ronaldo"); // ronaldo membaca bismillah

```