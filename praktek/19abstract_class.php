<?php   
//* abstract class
/**
 * terminologi abstract adalah bias yang berarti ada dan tidak , atau bias
 * 
 * pada php kita bisa membuat abstract class , pada abstract class kita tidak bisa membuat object secara langsung
 * tapi kita bisa object dari class turunan nya
 * kita bisa memanfaatkan abstract clas ini sebagai contrak pada child class nya / class turunan nya
 * 
 * 
 * membuat abstract class kita bisa dengan menggunakan kata kunci abstract
 */

 //* membuat abstract class

//  include_once "data/abstract.php";
 abstract class MakhlukGaib1{

 }

 class Malaikat extends MakhlukGaib1{

 };

 // kita tidak bisa memnbuat instance object secara langsung dari abstrack class

//TODO , silahkan buka komentar untuk menajalankan kode
//  $malaikat = new MakhlukGaib(); // ini error
//  var_dump($malaikat);

 $malaikat_1 = new Malaikat(); // ini tidak error , karena ini kita buat dari class childnya / turunan nya
 var_dump($malaikat_1);

 var_dump($malaikat_1 instanceof MakhlukGaib1); //true 
