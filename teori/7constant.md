# Constant

- propertis di class bisa berubah mirip variabel,
- pada class kita juga bisa menambhakan constants
- pada php dasar kita sudah belajar membuat constants dengan functin define, tapi di php 7 keatas kita bisa membaut constants dengan keyword `consts` 

cara membuat constat cukup tulis consts lalu di ikuti nama nya (tanpa perlu menulis tanda $)
```php
const ALLAH = 'TUHAN SEMESTA ALLAM';
```

## tips menulis const
tulis lah const dengan nama/ huruf besar atau UPPERCASE;


## menulis constanst di dalam class

```php
class Manusia {
    const TUHAN = "ALLAH SWT";


}

```


## mengakses constas pada class

secara default const tidak bisa berubah , jadi kalau kita buat di dalam class
maka semua object tersebut akan memiliki const yang sama
- jika di instace object ingin mengakses properti , kita perlu menuliskan nama_objetc->nama_properti

berbeda dengan const, const harus menulisakn nama class nya

- cara mengakses const nya pada class
  tulis nama_Clasnya::nama_constnya;
```php

echo Manusia::TUHAN;

```
contoh diatas artinya kita mengakses constans dari class manusia;