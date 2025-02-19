<?php
//* final class
/**
 * kata kunci final , bisa di gunakan pada class, apa bila di gunakan maka class tersbut tidak bisa lagi di extends
 * atau tidak bisa lagi mewarisi ke child class lain
 * 
 */
namespace final_class;
 class Facebook {
    public $info = "meta";
 };

 // ini tidak error karena ini norma.
final class Instagram extends Facebook{

 }

 // class tiktok tidak bisa mengextends class Instagram , karena class intrgaram menggunakan final class
 
 //todo hapus komenetar di bawah ini untuk melihat error nya
//  class tikok extends Instagram{

// }