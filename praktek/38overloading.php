<?php
//* overloading
/**
 * adalah kemampuan membuat properties dan function secara dinamis pada PHP
 * mirip dengan meta programming pada bahasa pemrograman ruby
 * namun ini berbeda pada bahas pemrograman java, dimana overloading di java menimpa / membuat baru function dengan nama yang sama
 * 
 * 
 * materi overloading ini erat kaitan nya dengan materi magic function
 */


//* properti overloading


//magic funtion untuk properti overloading
/**
 * __set() , __get(), __isset(), __unset()
 */
class informasi
{

    // public $data = [];
    public $agama;
    public $dosa_kecil;
    function __set($name, $value)
    {

        // $this->in[$name]="$value";
        $this->$name = $value;
        echo  "anda membuat properti dengan nama $name dan value ny $value" . PHP_EOL;
    }

    function __get($name)
    {

        echo "properti $name belum tersedia" . PHP_EOL;
    }

    function __isset($name): bool
    {
        return isset($this->$name);
    }

    function __unset($name)
    {
        unset($this->$name);
        echo "tidak ada function itu";
    }
};


$manusia = new informasi();


//* function __set($name,$value)
//diatas tidak ada properti nama, maka saat kita mengeset suatu nilai ke properti tidak ada maka akan jalan magic function set
// jika properti nya ada maka akan jalan seperti biasa
//properti asal tidak ada
$manusia->asal = "indonesia"; // maka akan jalan magic function set
//prperti agama
$manusia->agama = "islam"; // berjalan normal, karena ada properti nya diatas




//* function __get($name);
// magic function get akan berjalan ketika kita mengambil / get pada properti yang tidak ada,
// jika properti nya ada maka jalan normal seperti biasa

//properti ini tidak ada
$manusia->makan; // karena properti makan tidak ada , maka magic function get akan dijalankan
//properti ini ada
echo $manusia->agama . PHP_EOL; //


//* function __isset($name)
//magic function isset adalah , akan di jalankan ketika kita melakukan cek data dengan isset() atau empety(), jika propeti nya ada akan mengembalikan boolean true / 1, jika tidak ada maka kosong , atau tidak mengembalikan apapun
// properti ini ada
echo isset($manusia->agama); //1
// properti ini tidak ada
echo isset($manusia->asal); //0 , tidak ada apa-apa


//* function __unset($nama)
// magic function ini akan dijalankan ketika kita menjalnakan unset, tapi properti yang ingin kita unset tidak ada
// fungsi unset adalah menghapus value berdasrakan key / propertinya
// propeti ini tidak ada
unset($manusia->xx); // magic funtion unset berjalan

//propeti ini ada
unset($manusia->$dosa_kecil); //akan normal, akan menghilankan properti dosec kecil
var_dump($manusia);



//* function overloading
/**
 * saat kita memanggil function yang tidak ada, php sebenarnya tidak langsung memberikan error, tapi akan fallback dulu ke magic function, jika tidak ada baru memberikan error
 *
 *  magic function untuk function overloading diantarannya
 * 
 * __call()    , ini akan di panggil ketika kita memanggil function yang tidak ada
 * __staticcall()  , ini akan di panggil ketika kita memangil static function yang tidak ada 

 */


class manusia2
{

    function cek()
    {
        echo "bismillah";
    }


    static function doa()
    {
        echo "ya allah ya tuhanku";
    }

    function __call($name, $argument)
    {
        $data = join("", $argument);
        echo " karena function $name, tidak ada , jadi anda menjalankan magic function call , dengan $name, dan arguments nya $data" . PHP_EOL;
    }
    
    //karena __call static , harus di kasih static juga
 static function __callStatic($name, $arguments)
    {
       $data = join(",",$arguments);
       echo " karena function $name, tidak ada , jadi anda menjalankan magic function __callstatic, dengan $name, dan argument nya $data".PHP_EOL; 
    }

};

$makhluk  = new manusia2();

//* __call ()
/**
 * adalah magic function yang akan berjalan ketika kita memanggil function yang tidak ada
 * memilki 2 argument , satu nama argument, kedua dalam bentuk array, jadi kita join liat di atas
 */

// function cek ada , jadi tidak error
$makhluk->cek(); // bismillah
// function ramal tidak ada, jadi menjalankna magic function __call
$makhluk->ramal("cek guys");// ini berjalan magic function __call


//* __callstatic()
//adalah magic function yang akan berjalan ketika kita memamggil static function tapi tidak ada stattic functionya

//ini ada static function nya
manusia2::doa();//

// ini tidak ada static function nya