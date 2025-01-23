# properties

adalah fields/atribute/properties adalah data yang bisa di sisipkan atau di melekat pada suatu objek

sebelum memasukan data pada properties, kita harus mendeklarisakn dahulu di dalam class nya

membuat porperties sama seperti variabel , tapi ada kata kunci `var` di depannya

```php
class {

    var $nama;
    var $alamat;
    var $kota;
}

```


## maipulasi properties

fields / atribut di dalam objeck bisa kita manipulasi, seperti variabel

mengakses field cukup dengan kata kunci `->`
`$namaObjek->namaPropetimya`

```php

$person->nama= 'ronaldo';
$person->asal='portugal';
// ini artinya kita memanipulsi, memasukan value pada field nama dengan value 'ronaldo';
// memasukan value pada properti asal dengan value 'portugal'


// mengakses field

echo "$person->nama"; // ronaldo
// kita mengakses field nama pada object ronaldo

```


## properties type deklarasi
- sama seperti function kita juga bisa menentukan type data dari suatu field

- ini membuat php otomatis mengecek , jika kita memasukan niali yang tidak sesuai denga type data yang kita buat , maka akan eror

- ingat php juga memiliki fitur tyupe jugling yang secara otomatis mengecek tipe data
  
- untuk menambahkan tipe deklarasi, kita bisa tambahkan kata tipe data nya setalh kata kunci var
- `var string namafield`

```php
class person {

    var string $nama;
}

```

## default properties value

selain bisa membuat type deklarasi kita juga bisa membuat default value pada propertiesnya

artinya jika kita tidak memberikan value , maka default value yang akan mengisi nilainya 

```php

class person {
    var string $nama;
    var string $agama = 'islam'; // default value dari agama, adalah islam
}

```
artinya jika kita tidak memberikan nilai , diubah di objek , atau tidak memanipulasi nilai nya maka default value yang akan mengisi nilai nya


## nullable properties
selain bisa menambahakn type deklarasi / tipe data properties, dan juga defult value

kita juga bisa menambahkan tipe data null
dengan cara menambahkan tanda `?`di depan variabelnya
ini berarti bisa menerima null

ini berlaku di php 7.4 keatas


```php

class person {
    var string $nama;
    var ?string $alamat = null;
    var string $country = 'indonesia';
}
```
properti alamat bisa bisa menerima data null