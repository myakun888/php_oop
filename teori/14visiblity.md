# visibility
didalam OOP, kusus nya properti/metod dari sebuah objec, terbagi menjadi 3 visiblity berdasarkan aksesnya
1. public
2. protected
3. private
                                                                                                                                                                                                                                                                                                         
dari 3 jenis visibilty memiliki perilaku masing masing

|nama|class|subclass|global|
|-----|-----|--------|------|
|Public|Y|Y|Y|
|Protected|Y|Y|-|
|private|Y|-|-|


## public

saat kita membuat properti dengan `var` secara default itu visiblity nya adalah public
jadi var itu sama dengan public
artinya 
kita dapat mengakses properti bisa dari dalam class sendiri, bisa dari sublcass, dan secara global (dari luar)
note: kita bisa mengganti var dengan public, sebagai rekomendasi gunakan public

```php

class Rasul {

    public $agama;
    public __construct("islam"){
        //dari dalam class nya
        $this->agama;    // agama bisa di akses di dalam class nya
    }
}

$manusia = new Rasul ()
//dari luar
$manusia->agama  // ini bisa diakses dari luar


class Nabi extends Rasul {
    public __construct(){
        //dari subclass nya
        echo "$this->agama"; //ini bisa di akses dari subclass nya
    }
}

```

## protected
selain public , ada protected berdasarkan tabel nya, protected hanya bisa di akses dari dalam class dan subclassnya

```php

class Rasul {

    protected $agama;
    public __construct("islam"){
        //dari dalam class nya
        $this->agama;    // agama bisa di akses di dalam class nya
    }
}

$manusia = new Rasul ()
//dari luar
$manusia->agama  // ini error karena tidak bisa diakses dari luar


class Nabi extends Rasul {
    public __construct(){
        //dari subclass nya
        echo "$this->agama"; //ini bisa di akses dari subclass nya
    }
}


```
> cara agar bisa di akses dari luar kita bisa buatkan function ny saja
```php

class Rasul {

    protected $agama;
    public __construct("islam"){
        //dari dalam class nya
        $this->agama;    // agama bisa di akses di dalam class nya
    }
    //seperti ini, kita bisa akali
    function ambil_protected(){
        echo "$this->agama";
    }
}
```



## private
adalalh visbility yang hanya bisa di akses dari class nya sendiri
jadi hanya bisa diakses dari class itu sendiri

```php

class Rasul {

    private $agama;
    public __construct("islam"){
        //dari dalam class nya
        $this->agama;    // agama bisa di akses di dalam class nya
    }
}

$manusia = new Rasul ()
//dari luar
$manusia->agama  // ini error karena tidak bisa diakses dari luar


class Nabi extends Rasul {
    public __construct(){
        //dari subclass nya
        echo "$this->agama"; //ini eroor karena tidak bisa diakses dari subclass nya
    }
}
```


note:
gunakan private atau protected untuk properti yang ingin kita lindungi, jika kita tidak ingin nilainya bisa dirubah gunakan visiblit private atau procted 
sesuai kebutuhan nya