# polymorphism
didalam OOP di terdapat juag istilah polymorphism (bahasa yunai), yang berarti bentuk lain
setiap object dapat berubah menjadi bentuk lain 

polymorphism ini erat kaitannya dengan inheritance (pewarisan)

contoh
manusia (class)
laki-laki (object)

bentuk lain dari laki-laki bisa -> suami, programmer, software enginering, pengusaha dll



```php

//class parent
class Manusia {
    public $nama;

}

// class laki, child dari manusia
class Laki extends Manusia {

}
// clas perempuan, child dari manusia
class Perempuan extends Manusia {
    
}


//kita mmebuat class dengan properti dari class manusia, nama propertinya data(nama bebas) 
class Programmer {
    public Manusia $data;

}


//kita buat object nya
$mrProgrmmer = new Programmer()

// kita isi properti nya dengan class lain /bentuklain

$mrProgrmmer->data = new Manusia("james bond")

//tidak hanya dari class utamanya , kita juga bisa dari semua clas turunannya

//laki ini kan class turuna dari manusia
$mrProgrmmer->data = new Laki("james bond")

```


>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
```php

//class parent
class Manusia {
    public $nama;

}

// class laki, child dari manusia
class Laki extends Manusia {

}
// clas perempuan, child dari manusia
class Perempuan extends Manusia {
    
}


//kita mmebuat class dengan properti dari class manusia, nama propertinya data(nama bebas) 
class Programmer {
    public Manusia $data;

}


function say (Manusia $info){
    echo $info->nama;
}

say (new Manusia("james bond")) //james bond

say (new Laki("james bond")) //james bond

```

selain dari class bisa juga difunction

