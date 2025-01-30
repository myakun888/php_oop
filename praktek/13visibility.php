<?php
//* visibility
//! di php oop , properti/metod di dalam class memiliki visibility berdasarkan akses nya
//! terbagi menjadi 3 yaitu , public, protected dan private

//*public
// saat kita membuat properti dengan var, itu sama saja public, secara default semua properti itu public
/**
 * public dapat diakses dari semua scope
 * yatiu dari dalam class nya sendiri, dari subclass nya dari dan dari global
 * 
 */
class Human
{

    public $nama;

    public function __construct($nama)
    {
        //* dapat diakses dari dalam class nya sendiri
        $this->nama = $nama;
    }
};

$human_public = new Human("manusia");
echo "$human_public->nama";  //* dapat diakses dari luar/global

class Human_sub extends Human
{

    function __construct($name)
    {
        //* dapat diakses dari sublcass nya
        $this->nama = $name;
    }
}



//* protected
/**
 * adalah visibliti hanya bisa di akses dari dalam class nya sendiri, dan dari subclass nya,
 * sedangkan dari luar tidak bisa
 */

class Human_protected
{
    protected $nama;
    public function __construct($name)
    {
        $this->nama = $name; // bisa diakses dari dalam class nya

    }
};
$humpro = new Human_protected("manusia protected");
var_dump ($humpro);

class Human_prot2 extends Human_protected { // bisa di akses dari sublcas nya

    public function cek (){
        echo "$this->nama";
    }
}

$humpro_2 = new Human_prot2("manusia protected extends");
var_dump($humpro_2);
//* echo $humpro_2->nama; // ini error tidak bisa di akses dari luar, karena protected
// meskipun memiliki properti nama, tapi karena di protected maka tidak bisa di akses dari luar



//*private

/**
 * private yaitu visiblity yang scope nya hanya bisa di akses dari class ny sendiri,
 * untuk subclass nya , dan di global tidak bisa mengakses nya
 */

 class Human_private {
    private $name;

public  function __construct($nama)
  {
    $this->name = $nama;
  }
 }
 
 $human_priv = new Human_private("manusia private");
var_dump($human_priv);

// ini error pada properti nama, karena private tidak bisa di akses dari sublcass nya
// class human_priv2 extends Human_private{

//     function __construct($nama)
//     {
//         $this->name = $nama; //ini tidak bisa diakses dari sublcass, karena propertiny nama dibuat private
//     }
// }


//!note;
//gunakan protected atau juga private untuk melindungi properti yang tidak ingin di ubah dari luar
//! tips mengakses properti protetecd atau private agar bisa dari luar
// ya kita buat function saja 

class Akses {
    protected $nama;
    private $nohp;
    function __construct($nama, $nohp)
    {
        $this->nama = $nama;
        $this->nohp = $nohp;
        
    }

    function cek (){
        echo "nama: $this->nama, nohp: $this->nohp";
    }
}

$manusia_akses = new Akses ("manusia_akses","08xxx");

// echo $manusia_akses->nama; // kalau diakses dari luar baik private atau protected tentu error
// echo $manusia_akses->nohp;

echo $manusia_akses->cek(); // ini tidak error karena kita akali buat function dan kita akses dari dalem class nya
