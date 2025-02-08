# type check dan cast

sebelumnya sudah pernah dibahas untuk tipe data bukan class 
kita bisa mengecek nya den is function (prefix is)

contoh jika ingin mengecek string kita bisa menggunakan `is_string()` dan lainya 

- untuk tipe data objek kita bisa menggunakan kata kunci `instanceof`, kata kunci ini di gunakan untuk mengecek sebuah object berasal / intance dari sebuah class 
ini kan mereturn boolean 

- ini juga berfungsi untuk mengecek sebuah class yang di buat dari turunan class yang sama (inheritance)
- artinya akan menghasilkan true juga jika di baut dari turunan classs yang sama

contoh
kita mmemiliki class Manusia
dan instancenya adalah pria, kita bisa menggunakan `pria instanceof Manusia` //true
karean benar object pria adalah turunan / dibuat dari class manusia


```php

//class manusia
class Manusia {

}

//object dari class manusia
$pria = new Manusia()


var_dump ($pria instanceof Manusia); // true , karena $pria adalah dibuat dari class manusia



class Beriman extends Manusia{

}

$mukimin = new Beriman ()


var_dump($mukimin instanceof Beriman ); //true, benar karena $mukmin adalah instanceoff dari beriman
var_dump($mukimin instanceof Manusia ); //true, tetap true karena $mukmin dibuat dari class beriman, di mana beriman adalah turunan dari manusia


```


