# Regular Expression
atau juga di kenal dengan singkatan Regex
adalah fitur yang di gunakan untuk melakukan pencarian di string dengan pola tertentu
fitur ini juga kompetibel dengan bahasa pemrograman perl

materi ini sebenarnya sangat panjang jadi ini kita bahas sedikit sebagai pengenalanya

untuk lebih lengkap bisa ke documentasinya
[https://www.php.net/manual/en/pcre.pattern.php]


Function regular expression

|Function Regular Expression| Keterangan|
|---------------------------|-----------|
|preg_match($pattern, $subject)| digunakan untuk mencari match pattern / menampilkan pola yang sama berdasarkan pola yang kita buat|
|preg_replace($pattern,$replacement)| digunakan untuk mereplace / menimpa pola berdasarkan pola yang di buat|
|preg_split($pattern,$subject)| di gunakan untuk memoton / meisahkan dengan pattern/ pola yang di tentukan menjadi array|


## regular expression match
adalah regex yang berguna menampilkan / mencari kata yang sama terhadap pola yang kita buat
cara kerja nya , apa bila ketemu , maka kata nya akan di masukan ke dalam sebuah array
sedangkan dari function nya akan mengembalikan nilai integer 1 jika ada, dan jika tidak ada tidak mengembalikan apa-apa (perlu di ingat 1, bisa kita representasikan dari boolean adalah true)


struktur ny

```php
$matches = []// variabel array kosong berguna untuk menangkap, kalimat nya

$result = preg_match_all("kalimat1 | kalimat2 | kata1/flags", "tempat kalimat yang ingin di cari" $matches)
//kita buat variabel dalam contoh ini $result
//function preg_match_all() berisi
// 3 parameter
// 1 , kalimat kalimat nya jika lebih dari satu di pisahkan dengan tanda pipe | , lalu di ikuti dengan flag , isi dari flag adalah i = yang berarti incase sensitif, 
// 2, tempat kalimat yang ingin di cari
// 3, parameter kedua adalah variabel array kosong yang berguna untuk menampung nya



var_dump($result) // 
var_dump($matches)






```
**contoh 1**

```php

$penampung = [];
$hasil = (bool) preg_match_all("muhammad | rasul|/i", "nabi muhammad adalah utusan allah", $penampung);

var_dump($penampung)
var_dump($hasil) //true , karena di contoh di atas kita conversi jadi boolean, jika tidak ingin di conversi cukup hapus (bool)
```

**contoh 2**

```php

$penampung = [];
$tempat_dicari = 'nabi muhammad adalah kekasih allah, rahamat bagi seluruh alam semesta ';
$hasil = (bool) preg_match_all("muhammad | rasul|/i", $tempat_dicari, $penampung);

var_dump($penampung)
var_dump($hasil) //true , karena di contoh di atas kita conversi jadi boolean, jika tidak ingin di conversi cukup hapus (bool)
```




## regular expression replace
regex ini berguna untuk mereplace kata / kalimat berdasarkan pola yang kita buat
mungkin kita pernah temukan fitur ini seperti untuk mensensor kalimat yang tidak pantas, atau juga untuk kegunaan lain

struktur nya hampir sama 

`$result = preg_replace("/katayangdisensor1| kata_yang_disensor2/i", "kata yang akan mengganti","target kalimat / file yang akan di ganti"),



pada contoh ini kita akan simulasikan

akan mengganti setiap kata (anjing ,bangsat) menjadi tanda ***, dari target kalimat "dasar lu anjing, bangsat"


```php
$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu anjing, bangsat");

var_dump($result);

```



## Regular Expression Split

adalah regex yang berguna untuk memisahkan kalimat menjadi kata berdasarkan pola yang kita tentukan



```php

$result = preg_split("/[\s,-]","Muhammad Fajrin Saputra FullStack Programmer, BackEnd Programmer, SoftWare Enginering")

var_dump($result);

```