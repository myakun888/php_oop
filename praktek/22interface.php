<?php   
//* interface
/**
 * sebelumnya kita bisa memnbuat contrack child dengan abstract class, 
 * taoi ada yang lebih tepat lagi yaitu kita bisa menggunakan interface
 * 
 * interface ini berbeda konsep dengan yang ada pada bahasa pemrograaman c++
 * 
 * * interface sebenarnyany mirip dengan abstrack class
 * perbedaan nya pada interface , setiap method atau function otomtatis menjadi abstract function tidak memiliki block kode , tanpa harus menggunakan kata kunci abstrac di depan function nya
 * interface tidak bisa memnbuat properties, hanya bisa membuat CONSTANTS   
 * 
 * 
 * * untuk mewariskan pada class
 * tidak menggunakan extends, melainkan implements
 * 
 * * berbeda dengan class yang hanya bisa satu class pada child nya
 * dengan interface , class bisa imnplents lebih dari satu interface,
 * artinya class bisa menggunakan banyak interface 
 * 
 * ! perlu di ingat karena setiap metod / function pada interface otomatis menjadi abstract function, jadi otomatis harus di overrid function di child class nya / atau class yang menggunan interface nya
 */


namespace data1 ;

//interface dengan nama Rasul
interface Rasul {
    function menyebarkanAgama();
 };

 // interface dengan nama nabi
interface Nabi {
    public const TUHAN = "ALLAH SWT";

    function dzikir ();
} 

//! class jika ingin mewarisi interface bukan menggunakan extends melainkan implements
//class yang menggunakan interface , dengan kata kunci implement
//class bisa mewarisi lebih dari satu interface
// dalam contoh ini menggunakan / implements 2 interface yaitu Rasul, dan Nabi
class Nabi_bani_ismail implements Rasul, Nabi {

    // mengoverid class dzikir
    function dzikir (){
        echo "menyebut nama allah".PHP_EOL;
    }
    function menyebarkanAgama()
    {
        echo "menyebarkan agama, dari nabi bani ismail";        
    }
    function tuhan (){
        echo self::TUHAN;
    }

}


// class yang menggunakan satu interface
class Nabi_bani_israil implements Rasul {

    function menyebarkanAgama()
    {
        echo " menyebarkan agama dari bani israil";
    }
 }



 $muhammad = new Nabi_bani_ismail();
 $musa = new Nabi_bani_israil();

 $muhammad->dzikir();
 $muhammad->tuhan();