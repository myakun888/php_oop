# object iteration
di php object adalah suatu yang bisa kita iterati

artinya setiap kita membuat suatu object dari class, kita bisa melakukan iterasi di setiap propertinya
dengan menggunakan foreach
ini kita bisa manfaatkan jika ingin melihat ada properti apa saja yang ada pada suatu object
tapi perlu di ingat yang bisa kita iterasi hanya properti public, yang bisa kita expose keluar


```php
class data {
   public $nama;
   public $alamat;
   private $saldo;

}


$mr = new data();
$mr->nama = "cr7";
$mr->alamat = "portugal";
$mr->saldo = 10T;


foreach($mr as $properti => $value){
    echo "$properti : $value";
}

//echo nama= cr7
// alamat = portugal
// saldo = 10T
```




## iterator
- seblumnya kita sudah menggunakan iterasi data otomatis dengan foreach
kita juga melakukan iterasi seacara manual dengan menggunakan iterator, iterator ini adalah sebuah interface
- artinya kita bisa memilih properti apa saja yang akan di tampilkan ketika terjadi iterasi, tetapi jika melakuakn iterasi secara manual itu sangat ribet
- tapi ada cara lain kita bisa menggunakan `ArrayIterator`, yaitu iterator yang menggunakan array sebagai data iterasi na
- agar class kita bisa iterator manual , kita bisa menggunakan interface iteratorAgregate , di mana kita hanya perlu mengoverride `function getiterator()`, yang mengembalikan data iterator
- jadi kita bisa memilih apa saja yang ingin kita tampilkan saat terjadi iterasi , termasuk properti yang private dan protected


```php
class data {
   public $nama="ronaldo"
   public $alamat= "portugal"
   private $saldo="10 t"

public function getIterator(){

$data = [
"nama"=> $this->nama,
"alamat"=> $this->alamat,
"saldo" => $this->saldo,
]
return new ArrayIterator($data)
}

}



```
