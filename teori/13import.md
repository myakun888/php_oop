# import
- sebelumnya kalau kita banyak class function, const itu bisa kita handle dengan namespace dan kita harus menulis nama namespace ny di awal
-  tetapi jika sering menggunakannya , maka akan sering pula nulis ulang namespace di awal berkali kali ,
- untuk mengatasi itu kita bisa mengimportnya dengan keyword `use`
- dengan adanya use kita cukup sekali mengimport namespace nya
  

## kode use
car menuliskan use
`use namespace_yang_ingin_diimport`


```php
include 'data/data3.php'

use file\data1\person; // ini mengimport object
use function file\data1\doa; // ini mengimport function
use const file\data1\TUHAN; // ini mengimport const


// karena sudah di import dengan use , kita tidak perlu menulis ulang namespacenya
$manusia = person()
$manusia2 = person()
doa();

echo TUHAN;

```


## alias

- saat kita menggunakan use, kita cukup 1x menulis namespace jadi tidak perlu lagi menulis namespace berulang ulang
- pertanyaan bagaimana jika ada nama object/function/const yang sama di dalam namespace yang lainya+ ? ini akan error
- untung bisa kita atasi dengan fitur alias
- alias adalah kemampuan menulis class, function dan const dengan nama lain yang kita inginkan
- kita bisa menggunakan kata kunci as setelah use


tidak menggunakan use
```php

//ini error karena kita memiliki class sama
use file\data1\Human
use file\data2\Human

```

## menggunakan alias

menggunakan alias 
cukup dunakan keyword as

```php

use file\data1\Human as human1;
use file\data2\Human as human2

```



## group use deklrasi
terkadang jika sudah banyak class atau function, const di dalam sebuah namespace
kita juga akan mengiport nya berkali kali
tapi kita juga bisa sekaligus melakukan use nya , secara group dengan menggunakan tanda kurung kurawal

```php
//kita asumsikan kita memiliki lebih dari satu class
use file\data{Human,Nabi} //kita mengimport class human dan nabi seklaigus
use function file\data{doa,bacaan}
```

kita juga bisa menggunakan alias saat melakukan group use deklarsi

```php
use file\data1{Human as HM1 ,Nabi as Rasul} 
use file\data2{Human as HM2 } 
use function file\data{doa,bacaan}
```