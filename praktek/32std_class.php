<?php
//* stdClass
/**
 * adalah suatu class kosong bawaan dari php
 * ini di gunakan untuk mengubah / mengconversi tipe data lain ke object
 * 
 * 
 * ini sering di gunakan untuk mengubah data array menjadi object
 */


 $data = [
    "nama"=> "muhammad",
    "gelar"=> "SAW"
 ];
 var_dump($data);// tipe datanya array



 //* conversi array ke object kita akan ubah menggunakan stdClass

 //contoh kita akan menggubah array map, menjadi array
 $rasul= (object)$data;

 var_dump($rasul); // ini jadi object , yang di inisiasi dar std clsss


 //>>>> tipe data array index
 $cekdua = ["muhamamd","SAW"];
$cekdua_arr = (object)$cekdua;
 var_dump($cekdua_arr);
//untuk tipe data array , ketika di conversi menjadi object melalui stdClass
// yang memilki properti, maka propeti nya akan menjadi properti di objectny
// sedangkan jika array ny tidak memiliki properti , maka index nya akan jadi proprtinya


# tipe data selain array
// maka propertinya akan menjadi string "scalar" (pada saat materi ini php 8)
$cek_string = "testing";

$stirng_ubah = (object)$cek_string;
var_dump($stirng_ubah);