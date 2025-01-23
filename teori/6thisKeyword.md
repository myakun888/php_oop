# this keyword
this adalah kata kunci yang di gunakan untuk mengakses properti/function dari object saat ini


cara menggunakanny cukup ketik `this->propertis/functionny`


```php
$person2 = new Person();

//contoh satu

function sayHello(?string $name){

    if($name!=null){
        echo "hy bro nama saya $this->name";
    }else {
        echo "hy $name, nama saya $this->name  "
    }
}

```


```php

class oke {

$nama ;
$alamat;


function nama_istri($nama){
    echo " nama istri saya: $nama $this->$nama";
}
}
;

```
