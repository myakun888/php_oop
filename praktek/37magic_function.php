<?php
//* magic function
/**
 * adalah function bawaan dari php yang sudah memiliki fungsi tersendiri
 * kita tidak bisa mengubahnya karena sudah di tentukan oleh php
 * 
 * magic function ini banyak , diantaranya sudah kita pakai
 * seperti __construct(), __destruct(), 
 * 
 * dan masih banyak lagi lanya seperti __toString(), __invoke(), __debuginfo()
 */


//* __toString() function
/**
 * adalah function bawaan / magic function yang berguna mepresentasikan object kita agar dapat di baca string
 * 
 * karena object secara bawaan tidak bisa di echo, 
 *agar bisa id echo / di cetak maka kita gunakan __toString function
 */

class intel
{
   public $nama = "intel";
   public $jenis = "x86";

   //todo, hapus komentar pada function __toString ()
   public function __toString()
   {
      return "nama: $this->nama\njenis:$this->jenis";
   }
};

$core_i5 = new intel();

//ini tidak bisa echo karena masih berupa object ,yang di tampilkan array
echo $core_i5;
// agar tidak error maka kita harus menambahkan __toString() function
var_dump($core_i5);



//* __invoke() function

/**
 * inoveke function adalah functio bawaan dari php , yang akan di jalankan ketika suatu object diangap function
 * contoh
 * kita membuat object $data1 , ketika kita melakukan $data1()
 * maka invoke function akan di jalankan
 */


class xbox extends intel
{
   function __invoke()
   {
      return "jenis $this->nama";
   }
}

$game = new xbox();
//saat kita menjalan object game sebagai function
echo $game();



//* __debuginfo () function
/** 
 * saat kita mendebug dengan vardump sebenarnya yang jalan adalah function debuginfo
 * kita bisa mengcustumize saat memvardump, misal kita menambahkan isi pada saat kita mendebug dengan var_dump
 * kita bisa meggunakan __debuginfo() function
 * 
 * perlu di ingat ini harus mereturn array
 */

class dbx extends intel
{

   function __debugInfo()
   {
      $datax = ["tuhan" => "allah", "nama" => $this->nama, "jenis" => $this->jenis,];
      return $datax;
   }
}

$gamex = new dbx();

var_dump($gamex);



## magic constants

// adalah constants bawaan dari php
// berbeda dengan constant biasa , magic constant adalah nilai nya akan berubah tergantung dimana constants tersebut di eksekusi
// berbeda dengan constants biasa yang nilainya tetap

/**
 * magic constatan selalu di awali dengan 2x underscore __ dan dengan nama huruf kapital
 * contoh __LINE__
 *kecuali untuyk (className::class) contoh nama class manusia maka menggunakanya manusia::class
 *  
 * beberapa magic constant
 * 
 * __LINE__ , __FILE__, __DIR__, __METHOD__, __FUNCTION__ , __CLASS__ , __TRAIT__ , __NAMESPACE__ 
 */


//maksud dari nilai nya akan berubah sesaui dimana constant tersebut di eksekusi adalah sebagai beriku

$baris = __LINE__;

echo $baris . PHP_EOL;  // 111
echo __LINE__ . PHP_EOL; // 114


echo __LINE__ . PHP_EOL; // 117



### __FILE__
/**
 * __FILE__ , adalah mengambil path dari file saat ini , absolut path ny
 */

echo __FILE__ . PHP_EOL;



### __DIR__
/**
 * __DIR__ , adalah mengambil path dari direktori atau folder saat ini , absolut path ny
 */


echo __DIR__;
