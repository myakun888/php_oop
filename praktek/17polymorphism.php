<?php
//polymorphism 
//dalam bahasa yunani artinya "bentuk lain/ berubah"
// ini erat kaitanya dengan inheritance atau turunan

//kelas utama
class Programmer
{
    public $nama;
    public function __construct($nama)
    {
        $this->nama = $nama;
    }
};

//class extend / inheritance

class FrontEnd_Programmer extends Programmer {};

class BackEnd_Programmer extends Programmer {}



// polimorps nya , kita membuat class baru dengan nama company yang menggambil dari clas programmer
class Company
{
    // class ini menggambil propert dari class Programmer dengan yang di dinamai dengan $data (nama bisa bebas)
    public Programmer $data;
}


$company = new Company();


$company->data = new Programmer("fajrin FS");
var_dump($company->data);

//* note karena kita sudah mengambil kelas parent nya kita juga bisa membuat object polimorp dari clas turunany nya 
$company->data = new FrontEnd_Programmer("fajrin FE");
var_dump($company->data);

$company->data = new BackEnd_Programmer("fajrin BE");
var_dump($company->data);



// polimorp dengan function juga bisa

 function sayprogrammer (Programmer $prog){

    echo $prog->nama.PHP_EOL;


}

sayprogrammer(new Programmer("fajrin FS"));
sayprogrammer(new FrontEnd_Programmer("fajrin FE"));
sayprogrammer(new BackEnd_Programmer("fajrin BE"));