# function overridng

adalah kemampuan dari object untuk membuat ulang function yang sudah ada di parent class ny dengan nama function yang sama
atau bisa diartikan menimpa apa bila nama nya sama

contoh jika kita membuat function di parent class dengan nama functiuon doa, lalu di class child kita buat ulang dengan nama yang sama function doa, maka saat kita memanggil function dari object yang kita buat dari class child nya / turunan nya yang akan jalan adalah function dari clas child


```php

class Rasul {
    public function doa (){
        echo "bismillah rasul";
    }
}


class Nabi extends Rasul {
public function doa (){
        echo "bismillah nabi";
    }

}

$nabi_allah = new Nabi();

$nabi_allah->doa() //bismillah nabi
// $nabi_allah->parent::doa()
// maka yang jalan adalah function dari class extends nya 

```
> note : saat kita memnogveride function di parents nya tapi berbeda argument ( contoh di parent 1 argument, di child 2 argument / tidak ada) maka akan ada warning / error comptible atau tidak sama
ushakan consisten, jika di parent satu , maka di child juga satu argument ny harus sama

pertanyaannya bagaimana jika kita ingin mengakses function yang ada pada class parentya dengan nama yang sama ?
akan dibahas pada materi selantjut nya `parents`