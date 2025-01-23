# construktor

- saat kita membuat object dari sebuh class kita seperti memangil function karena menggunakan tand kurung ()

- di dalam class php,kita bisa membuat construktor, construktor adalah function pertama yang di panggil / di jalankan saat kita membuat objec

- kita juga bisa memberika argument/ parameter didalam function construkter

- membuat contruktor `__contruktor()`



## membuat constraktor

di dalam class kita bisa membuat constroktor

```php

class Rasul {
    var $nama;
    var $kitab_suci;
    const TUHAN = "ALLAH SWT";
    
    __construct($nama_rasul,$kitab){
        $this->nama = $nama;
        $this->kitab = $kitab;
    }
}

$muhammad = new Rasul("muhammad saw","alquran");
// artinya kita mengisi argumen dengan parameter, nama = muhmmad saw, kitab

```






