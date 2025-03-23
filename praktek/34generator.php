<?php
//* generator
/**
 * sebelumnya kita sudah bahas ya , kita bisa membuat object bisa di iterasi dengan iterator
 * tapi pembuatan iterator secara manual itu agak ribet
 * 
 * untung di PHP ada fitur generator jadi kita bisa lebih sederhana dalam mebuat iterator secara otomatis yang bisa kita custom, hanya menggunakan kata kinci yield
 * 
 */


function ganjil($nilai): iterable
{

    $data = [];
    for ($i = 0; $i <= $nilai; $i++) {

        if ($i % 2 == 1) {
            $data[] = $i;
        }
    }
    return $data;
}


$hasil = ganjil(10);



foreach ($hasil as $key => $value) {
    echo "ganjil: $value \n";
}



//* dengan kata kunci yield
function genap($nilai): iterable
{

    for ($i = 0; $i <= $nilai; $i++) {

        if ($i % 2 == 0) {
            yield $i;
        }
    }
}

$var_genap = genap(100);

foreach ($var_genap as $key => $value) {
    echo "genap : $value \n";
}


//* ni kita akan modifikasi materi seblumnya dengan dengan array iterator kita ganti dengan yield


class iterator_manual_2 implements IteratorAggregate {
    public $satu = 'first';
    public $dua = 'second';
    private $tiga = 'third';
    protected $empat = 'four';

    function getIterator(): Traversable
    {
        // $datax = [
        yield  "satu"=>$this->satu;
        yield   "dua"=>$this->dua;
        yield  "tiga"=>$this->tiga;
        yield "empat"=>$this->empat;


        // ];
// $dataz = new ArrayIterator($datax);
//return $dataz;
    }

}

//* dari contoh diatas kita tidak lagi menggunakan array untuk menampung nya, dan juga tidak memerlukan object array iterator, kita cukup mengganti nya denga kata kunci yield

$obj2_iterator = new iterator_manual_2();

foreach ($obj2_iterator as $key => $value) {
    echo "$key : $value \n";
}