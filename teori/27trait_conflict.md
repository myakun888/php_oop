# trait conflict

saat kita membuat banyak trait terkadang kita akan menemui suatu function / class memiliki nama yang sama di trait lain
ini akan menyebabkan conflict, karena memiliki nama yang sama
untuk mengatasi conflict / bentrok kita bisa menggunakan kata kunci `insteadof`; saat menggunakan trait tersebut di dalam class nya lalu pilih yang mana yang akan di gunakan

contoh
- trait dengan nama informasi memiliki function A, trait dengan nama info memiliki function A
- artinya memiliki nama yang sama, ini akan conflict / bentrok;

```{ namatrait::nama_atau_function insteadof trait_yang_tidak_digunakan }```



### ini contoh trait yang bentrok
```php


trait informasi {

    function A (){
        echo "informasi A";
    }
    function B (){
        echo "informasi B";
    }

};


trait info {
    function A () {
        echo " info a ";
    }
    function B () {
        echo " info b ";
    }

};


```


## mengtasi conflic dengan kata kunci insteadof

contoh diatas
cara mengatasinya cukup gunakan kata kunci `insteadof`, di dalam class yang menggunakan trait ny
sebgai berikut

```php

trait informasi {

    function A (){
        echo "informasi A";
    }
    function B (){
        echo "informasi B";
    }

};


trait info {
    function A () {
        echo " info a ";
    }
    function B () {
        echo " info b ";
    }

};


// ini class yang menggunakan trainya

class manusia {
    use informasi, info {
        informasi::A insteadof info; // artinya kita memilih/menggunakan function A dari trait informasi, dari pada trait info
        info::B insteadof informasi// artinya kita menggunakan/memilih function B dari trai info, dari pada trait informasi
    }
};


```