# interface inheritance
- 
- tidak hanya class yang bisa melakukan inheritance / pewarisan, interface pun bisa melakukn pewarisan
- berbeda dengan class yang hanya bisa melakukan turunan ke satu child class nya, interface bisa lebih dari satu
- jika kita ingin mewarisi interface ke interface lain guanakan kata kunci `extends`

>>   **note** <br>
 class mewarisi class ... menggunakan kata kunci **extends**  <br> 
 class menggunakan interface .... gunakan kata kunci **implements** <br>
 implement mewarisi implements ... menggunakan kata kunci **extends**



## kode inhertiance / pewarisan terhadap interface

kita menggunakan kata kunci extends

 ```php


namespace data

interface Rasul {
    function doa ()
    
}

// interface rasul mewarisi ke interface nabi
interface Nabi extends Rasul {
    function doa2 ()
}

 ```


 ## satu class bisa menggunakan lebih dari satu interface

 class dapat menggunakan lebih dari satu interface, dengan kata kunci implements
```php


namespace data

/**
 * interface 1 dengan nama Rasul
 * interface 2 dengan nama nabi
 */

interface Rasul {
    function doa ()
    
}

interface Nabi  {
    function doa2 ()
}



/**
 * class wali menggunakan 2 interface diatas, dengan kata kunci implements 
 */
class  Wali implements Rasul, Nabi{

    function doa{
        echo "bismillah";
    }
    function doa2{
        echo "alhamdulillah";
    }
}

```