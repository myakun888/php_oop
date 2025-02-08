<?php
//* getter dan setter

/**
 * sebelum kita bahas getter dan setter, kita bahas encapsulasi
 * konsep dari encapsulasi ya itu membungkus sama hal nya seperti kapsul,
 * dimana dalam hal ini kita bungkus sebuah data / kita melindungi sebuah data
 * akses dari luar
 * biasanya kita menggunakan function nya untuk mengakses nya, ini sebenarnya adalah kita membuat getter
 * 
 * tapi dalam php ada standar sendiri yang di rekomendasikan
 * terbagi menjadi data boolean dan selain boolean
 *
 *  
 * get dan set pada boolean,
 * jika get , is_namafucntion()
 * jika set, set_namafunctiion()
 * 
 * 
 * get dan set pada data buka boolean
 * jika get , get_namafunction()
 * jika set, set_namafunctiion()
 * 
 */



class informasi
{
    private $id = null;
    public $status = null;

    //boolean
    function set_status($status = false)
    {
        if (is_bool($status) == true) {

            $this->status = $status;
        }
    }
    function is_status()
    {


        if ($this->status === null) {

            return "input ulang data anda , data yang anda masukan harus boolean, true jika menikah, false jika belum menikah";
        }
        return    $this->status == true ? "menikah" : "beluh menikah";
    }

    //selain boolean

    function set_id(int $data_id)
    {
        $this->id = $data_id;
    }
    function get_id(): int
    {
        return $this->id . PHP_EOL;
    }
}


$manusia = new informasi();
$manusia->set_status();
// $manusia->set_status(false);

// $manusia->set_id(100);
// var_dump($manusia->get_id());
var_dump($manusia->is_status());
// var_dump($manusia->get)
