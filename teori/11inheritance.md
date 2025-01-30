# inheritance
- pewarisan / turunan
adalah kemampuan class untuk menurunkan mewarisi segala bentuk properti dan metod nya
artinya class parent mampu menurunkan ke class child nya

- satu kelas parent mampu untuk banyak class child
 satu class child hanya mampu mengambil satu class parent


-saat sebuah class parent mewarisi ke class child artnya seluruh metod dan properti nya ikut turun juga ke class childnya (kecuali di seting private)

## membuat inheritance

untuk membuat sebuah class agar bisa mewarisi kita cukup dengan kata kunci `extends`


dalam contoh ini kita akan membuat calss wali, inheritance (turunan) Rasul

class Rasul adalah parent nya sendangakn wali dalah child nya
```php

class Rasul {
    $nama;
    $agama;
}



class Wali extends Rasul{


}

//// membuat objectnya

$muhammad = new Rasul();

$imam_syafei = new Wali()




```

## mengakses properti dan metodh

untuk mengakses properti dan metod
cukup dengan cara yang sama yaitu `$nama_object->prpetinya/metodya`

