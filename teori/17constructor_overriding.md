# constructor overriding

karena constructor adalah sebuah function, jadi secar teknis kita bisa deklrasikan ulang di class childnya

berbeda dengan function biasa jika kita mengoverriding dengan argument yang berbeda akan terjadi warning
- untuk constructor tidak terjadi warning, saat kita mengoveride dengan mengubah argument nya
tapi direkomendasikan memangil parents construktor nya


## contoh overiding constructor 1
```php

class Rasul {
    public $agama;
    public $asal;
    
function __construct($agama, $asal){
        $this->agama = $agama;
        $this->asal = $asal;

    }

}


class Nabi extends Rasul{
    
    function __construct($asal){
        parents::__construct("islam",$asal) // ini parent construktor nya
    }
}



```
perlu di perhatikan saat kita memgoverid consturtor kita di rekomendasikan memangil construk parentny juga
karena takunya ada construk dari parent yang harus di jalankan