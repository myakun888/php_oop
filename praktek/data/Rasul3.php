<?php


class Rasul3{
    const TUHAN = "ALLAH SWT";
    var $name;
    var $agama;
    var $gelar;
    public function __construct($nama,$gelar,$agama="islam")
    {
        $this->name = $nama;
        $this->agama = $agama;
        $this->gelar = $gelar;
        
    }


  public  function __destruct()
    {
        echo "terimakasi $this->name".PHP_EOL;
    }
}

