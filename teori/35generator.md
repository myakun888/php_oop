# generator

sebelumnya kita sudah tau , untuk membuat object agar bisa di iterasi, kita harus menggunakan iterator, tapi membuat iterator itu agak ribet
ini kita bisa membuat iterator secara otomatis dengan kata kunci `yield`




## contoh dengan arrayiterator, atau tanpa kata kuci yield

```php
function getGanjil ($max):iterator
{
$data=[];

for($I=0;$i<$max;$i++){

if($i % 2 == 0){
    $data [] = $i;
}
return ArrayIterator ($data)
}
}

$data =getGanjil(100)

foreach ($data as $key => $value){
    echo "$key: $value";
}
```
dari contoh diatas adalah contoh iterasi , diman kita membuat menggunakan array iterator
dimana alur nya kita melakukan perulangan for, jika nilai i % 2 == 0, maka nilai nya kita masukan ke dalam array ($data), lalu kita return object nya yang di buat dari class ArrayIterator

ini agak panjang ya


## dengan kata kunci yield
contoh

```php
function getGanjil ($max){
    //kita tidak perlu membuat array
 for($I=0;$i<$max;$i++){
if($i % 2 == 0){
  yield $i
}
// kita tidak perlu juga membuat class dari object iterator
}
}

$data =getGanjil(100)

foreach ($data as $key => $value){
    echo "$key: $value";
}
```

dari contoh diatas, kita membuat function di dalamnya ada perulangan for
apabila nilai % 2 == 0, mencari nilai genap
ketika genap kita masukan nilainya agar bisa di iterasi dengan kata kunci yield


note:
pada materi iterator
kita juga bisa menggubah pada contoh sebelumnya dengan arrayiterator, dan function getinterator, dengan kata kunci yield

```php
class data {
   public $nama="ronaldo"
   public $alamat= "portugal"
   private $saldo="10 t"

public function getIterator(){

yield "nama"=> $this->nama,
yield "alamat"=> $this->alamat,
yield "saldo" => $this->saldo,

}

}

$manusia = new data();

foreach($manusia as $properti => $value){
    echo "properti $properti: value : $value \n"
}


```