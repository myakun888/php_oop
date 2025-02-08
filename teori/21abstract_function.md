# abstrack function

selain di class kita juga bisa membuat abstrack function , pada abstrack function di dalam class kita tidak bisa menjalankan langsung , function nya 
tapi kita haru mengoverride function tersebut



## membuat abstrack function

- membuat abstrack function  `kita tidak boleh ada block function / eksekusi { }`,
- wajib di override di class turunan nya / child class nya
- perlu di ingat saat membuat abstrack function pastika visbility nya `tidak boleh private`
```php

abstract class MakhlukGaib {

abstract public function doa (); // membuat abstrack funtion tidak boleh ada block eksekusi

}

class Malaikat extends MakhlukGaib{

// di class turunan  nya kita bisa mengoverride nya
public function doa (){
    echo "bismillah";
}
}


$malaikat = new MakhlukGaib()

// menggunakan abastrack function
// sama seperti manggil function biasa

$malaikat->doa; // bismillah
```