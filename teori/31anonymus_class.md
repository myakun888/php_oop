# anonymus class
adalah class tanpa nama
kemampuan mendeklarasikan class, sekaligus menginisiasi object nya secara langsung

sangat cocok jika kita ingin meimplenstasikan interface atau class sederhana tanpa harus membuat class ny

artnya secara sederhana, kita bisa membuat objet tanpa harus mendeklarasian class nya


contoh anonymus classs


pada contoh ini kita ingin mengimplentasikan , interface pada anonymus class
```php
interface hello {

function sapa ();

};


$manusia = new class  implements hello  {

function sapa (){
    echo "hallo guys";
}
}


```

contoh 2

kita membuat anonumus class saja

``` php

$manusia = new class  {

}


```



## construktur pada anonymus class

selain itu kita juga bisa melakukan construktur pada anonumus class


```php

// parameter langsung di isi di anonymus class nya
$manusia = new class ("ronaldo") Makhluk { 
    
    public $name;
function __construct ($nama){
    $this->name = $nama;
}
};
//ini membuat object ,dengan properti name = "ronald";

```
perlu di perhatikan parameter nya langsung di isi di anonymus class nya