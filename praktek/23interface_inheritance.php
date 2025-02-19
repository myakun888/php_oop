<?php
//* interface inheritance
/**
 * selain class , interface juga bisa melakukan inhertance dari interface lain, dengan menggunakan kata kunci extends
 * berbeda dengan class dimana child class nya hanya bisa extends satu parent, interface bisa lebih dari satu 
 *
 * class bisa menggunakan lebih dari satu interface
 */

 namespace data2;

 
 interface Rasul {
    function doa();
 }

 interface Nabi {
    
 }

 // wali mewarisi dari interface Rasul dan Nabi
 //*  pada contoh ini menunjukan interface bisa mewarisi ke interface lain, dan bisa lebih dari satu 
 interface wali extends Rasul,Nabi {

 };


 //multiple inheritance
 //class bisa menggunakan / mewarisi lebih dari satu interface sebagai parents nya
 //sedangkan pada materi seblumnya inheritance class, class hanya bisa jadi satu parent class jika ingin mewarisi ke class lain 
class waliAllah implements Rasul,Nabi,wali{

    function doa () {
        echo "alhamdulillah ya allah";
    }
}

//dan perlu di ingat setiap function / method di dalam interface adalah abstract jadi wajib di override


$manusia = new waliAllah();

var_dump($manusia);
$manusia->doa();

//! note
/**
 * class inheritance ke class  ----- menggunakan kata kunci extends
 * class mewarisi dari interface ----- menggunakan kata kunci implements
 * interface mewarisi dari interface --- menggunakan kata kunci extedns
 */