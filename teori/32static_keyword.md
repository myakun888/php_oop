# static keyword

- adalah kata kunci yang di gunakan untuk membuat properti atau function pada suatu class, agar dapat di akses langsung tanpa 
- ketika kata kunci static di gunakan pada properti atau function tersebut maka tidak lagi menempel pada suatu insntance object yang di buat dari class tersebut
- karena menempel pada class maka untuk mengakses nya kita harus melalui class, seperti mengakses constant pada class, menggunakan operator `::`


```php
class Rasul {
    static public $tuhan = "ALLAH";
    static public function salam (){
        return "sembahlah allah tuhan satu yang tiada duanya";
    }
}


// mengakses static properti 
echo Rasul::$tuhan;

Rasul::salam();


``

