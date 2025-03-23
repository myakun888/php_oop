# comparing object
selain tipe data, kita juga bisa melakukan comparing / comparasi / perbandindan pada sebuah object dari class yang sama

perbandingan nya menggunankan operator equals `==`, dan identity `===`

- equals adalah membandingkan obeject, yang di bandingkan adalah properti propeti beserta isi dari properti tersebut, akan true jika properti dan isi properti sama

- identity adalah membandingkan kedua object apakah identik, artinya mengacu ke object yang sama, akan true jika yang di bandingkan adaalah object yang sama


```php
class obj1 {
    public $asal = "indonesia";
    public $agama = "islam";
};




$m1 = new obj1();
$m2 = new obj1();


var_dump($m1==$m2) // true

var_dump($m1===$m2) // false, karena object berbeda
var_dump($m1===$m1) // true karena object nya sama


```