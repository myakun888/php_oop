<?php

//* this keyword, adalah kata kunci yang di gunakan untuk mengakses properti, dari objeck saat ini

class Rasul
{
    var string $name;
    var string $agama;
    var int $rasul_ke;
    var ?string $asal = null;
    //! kalau menggunakan nullable ?, wajib tentukan type deklarasi nya (tipe data)
    const TUHAN = "ALLAH SWT";
    function cek(?string $asal_nabi)
    {
        if (is_null($asal_nabi)) {
 //jika asal nabi null / true
            echo "nabi $this->name, berasal dari jazirah arab".PHP_EOL;
        } else {
            echo "nabi $this->name, berasal dari $this->asal".PHP_EOL; //kata kunci this ini akan mengakses properti saaat ini, dalam contoh ini this->asal, artinya mengakses properti asal, misal nya yang kita buka object A, artinya kita mengecek properti asal dari objeck A
        }
    }
};
