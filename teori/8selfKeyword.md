# self keyword

## properties vs constant

saat kita memmbuat object , secara otomatsi semua propertis yang kita buat di class akan menempel pada per instance object masing masing
maka dari itu saat kita mengakses prperti dari object kita harus mengakses object nya terlbih dahulu

berbeda dengan constan, constant hidup nya di class jadi jika kita ingin mengakses constan harus melalui classnya
dengan cara 
NAMACLASS::NAMACONSTAN

secar sederhana properties dibuat satu perstu di setiap object, sedangkan constan dibuat satu perclass

## self keyword
jika di kita ingin mengakses properti dari objek saat ini kita bisa menggunakan this, maka untuk mengakses constan, kita bisa mengganti nama class dengn nama self, yang di gunakan untuk mengases constant dari object saat ini

jadi kesimpulan kita bisa mengakses constan dengna cara 
namaclass::namaConstanya

tapi jika kita di dalam object yang sama kita juga bisa menggunakan
kata kunci self
self::namaConstanya

```php

class Rasul{
    const RASULALLAH = "NABI MUHAMMAD SAW";

function info(){
    echo "Rasulallah adalah ".Rasul::RASULLALLAH
    echo "Rasulallah adalah ".self::RASULLALLAH

}// hasil dari kedua cara di atas sama, 
// jadi kesimpulan selff itu penggan nama class nya
}



```
