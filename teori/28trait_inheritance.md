# trait inheritance

- selain class, interface yang mampu melakukan inhertance atau pewarisan trait juga bisa melakukan pewarisan
- artinya trait dapat menurunkan apa yang ada pada trait yang di warisinya

melakukan nya dengan kata kunci `use` sama seperti penggunaan nya pada trait pada class


contoh

```php

trait satu {
    $data = "informasi";
    function A (){
        echo "oke";
    }
}

trait dua {
    $informasi = "validasi";
    function B (){
        echo "sip";
    }
}


// trait plus menggambil atau di warisi dari trait satu, dan dua
// 
trait plus {
    use satu,dua;
}



// secara tidak langsung human mewarisi trait plus, dimana trait plus mendapat warisan dari trait satu dan dua;
class Human {
    use plus;
}

```