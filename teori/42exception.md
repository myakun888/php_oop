# exception

saat kita membuat aplikasi kita tidak akan terhindari dari error
di php error itu di exception, dan semua di representasikan dalam bentuk class `exception` 
dengan adanya exception kita bisa memanagement error nya

## menggunakan exception
banyak sekali kelas yang di sediakan oleh php, atau kita bisa juga membuat class exception sendiri

jika ingin membuat exception sendiri kita cukup mengimplements dari interface Throwable atau turuan-turunanya



## membuat class exception
di sini kita contohkan membuat class exception yang di extend dari parent class exception

```php
class CekError extends Exception {

};

```


## membuat exception

- exception itu biasanya terjadi pada funciton
- pada code program nya nanti kita cupup menggunakan kata kunci `throw` lalu di ikuti dengan objectnya



```php
// ini class exception yang extend class exception
class CekError extends Exception {

};
// ini object nya, paramter nya adalah string error nya
$userkosong = new CekError("username kosong");
$emailkosong = new CekError("email kosong");


// contoh
//class
class log_in {
public $user_name;
public $email;

}

// kita membuat object dari class log_in
$login_request = new log_in();
//lalu kita isi properti nya sebagai berikut
$login_request->user_name = "ronado";
$login_request->email = "ronaldo@gmail.com";


// ini contoh function jika di dalam naya ada error , kita sudah tangani dengan exception
function validasi ($log_in $data){

if( !isset($data->user_name)){
    throw $user_kosong;
    // throw new CekError("useremail kosong"); // ini object nya langsung di buat di sini, bisa juga
}
else if(!isset($data->email)){
    throw new CekError("email kosong")
    // throw $email_kosong // bisa juga dengan object error yang sudah kita buat di atas
}else if (!isset($data->user_name)&& !isset($data->email)){
    throw new exception ("email dan user name belum ada") // bisa juga kita buat dari parent class nya yaitu claas exception
}

}
// jadi inti nya throw ny harus ke object dari class yang memiliki turunan exception, dalam contoh ini kita membuat object error nya dari turunan exception, else if terakhir dari class parent ny exception langsung


validasi ($login_request)// jika semua lengkap tidak error
// tapi jika salah satu email atau user name tidak ada maka exception yang kita buat akan tampil

```


## Try Cath

setelah kita membuat exception yang berguna menangi /error yang kita perkirakan akan terjadi
di dalam function yang bisa menyababkan exception, 
secara default saat terjadi exception maka secar otomatis kode program akan berhenti

maka dari itu disarankan kita menggunakan try catch expression 
diman block try berguna untuk menjalankan function yang ada exception nya
dan block catch akan menangkap jika terjadi exception nya

```
try{
    function yang ada exception nya
}catch(class_exception $exception ){
    echo "error: $exception->getMessage()";
} 
```

> note: penggunaan try-catch ini sama seperti bahasa pemrgoraman lain, seperti di javascript, java dll, di mana secara fungsi ny block try beguna untuk menjalankan apa yang ingin kita eksekusi, sedangkan block catch berguna untuk menangkap jika terjadi error


ini kita teruskan dari simulasi code di atas sebelumnya

```php
try{
validasi($login_request);

}catch(CekError $exception){

echo " Error: {$exception->getMessage()}"
}

```

### multiple try-Catch 
kita juga bisa melakukan multiple trycate cukup tambahkan saja cath ny
kita bisa memasukan dari class exceptio lain, pada contoh ini di cath nya kita memasukan parent class expception nya langsung

**cara satu**

```php
try{
validasi($login_request);

}catch(CekError $exception){

echo " Error: {$exception->getMessage()}"
}catch(Exception $exception){  
echo " Error: {$exception->getMessage()}"

}

```

**cara ke dua**
cara kedua ini , dimana dalam satu parameter cath kita memasukan dua class exception nya
yaitu ceError dan Exception dimana kita menggukan | 
dengan konsept paremter bitwisee sperti di javascript


```php
try{
validasi($login_request);

}catch(CekError | Exception $exception){

echo " Error: {$exception->getMessage()}"
}

```



## finally keyword

- selain block Try-Catch, ada juga block finally, jika try dijalankan untuk program yang sukses dan catch akan di jalankan ketika terjadi error
- maka finally adalah block code yang selalu di jalankan setelah try atau catch yang berjalan

- jadi finally adalah block kode program yang akan selalu di eksekusi
- finally bisa kita gunakan pada posisi saat jika kita membuka koneksi pada database , kita gunakan finally untuk menutup koneksi agar tidak terjadi memmory lengkap
- atau pada contoh javascript kita membuat kode saat kita mengirim file, dengan info 'terimakasi telah mengirim file'


```php

try{
validasi($login_request);

}catch(CekError | Exception $exception){

echo " Error: {$exception->getMessage()}"
}
finally{
    echo 'eror tidak error block kode ini akan di jalankan';
}

```

## Debug Exception
kita juga bisa melakukan debuging pada exception, karena di exception terdapate function getTrace()
function ini berisikan informasi , apa exception nya , dibaris mana , dan di lokasi file apa, function apa sampa argument yang di kriim function tersebut

jadi kita bisa menggunakan function getTrace(), untuk debuging
beberapa function yang dapat di gunakan untuk debuging diantaran nya

- getMessage()  ini berguna memberikan informasi dalam bentuk message / pesan
- getTraceAsSTring()  ini berguna memberikan informasi dalam bentuk string
- getTrace() memberikan inforamsi dalam bentuk array/ object  ( gunakan var_dup untuk melihat return dari function ini)





```php
try{
validasi($login_request);

}catch(CekError | Exception $exception){

echo " Error: {$exception->getMessage()}"

// memberikan return dalam bentuk string
echo $exception->getTraceAsString();

// dum trace
var_dump($exception->getTrace());
}
finally{
    echo 'eror tidak error block kode ini akan di jalankan';
}
```