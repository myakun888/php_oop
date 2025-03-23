<?php
//# exception
// error handling pada php kita menggunakna exception
/**
 * error pada php di sebut exception
 * dan di presentasikan dalam bentuk class exception
 * 
 * 
 * kita bisa menggunakan class sendiri atau menggunakan yang sudah di sediakan oleh php
 * 
 * 
 * jika kita ingin membuat exception sendiri dan mengextends dari class exception class tersebut 
 *   
 *
 */



//*membuat class exception

class CekError extends Exception {}


$Errorx = new CekError("error string kosong");
//* exception itu biasanya terjadi di dalam function
/**
 *  di dalam kode program kita kita cukup menggunakan kata kunci throw lalu di ikuti dengan object dari class exception nya
 */



//kita buat object kita asumsikan untuk cek validasi

class data
{
    public $user_name;
    public $email;
}

// sekarang kita memiliki object diman user nya adalah ronaldo, dan email nya adalah cronaldo.com
$user = new data();
$user->user_name = "ronaldo";
$user->email = "cronaldo.com";


//kita buat funciton validasi
function validasi(data $object)
{

    if (!isset($object->user_name)) {
        throw new CekError("error tidak ada username");
    } else if (!isset($object->email)) {
        // ini object nya langasung di buat di baris ini
        throw new CekError("error tidak ada email");
    } else if ($object->user_name == "") {

        throw new CekError("string kosong");
    }
};


validasi($user);


// ini contoh jika ingin menggunkan object nya kita buat diluar, kita harus menggunakan anonymus function dan kata kunci use untuk memanggil object dari luar ny dalam contoh ini $Errrox, atau gunakan kata kunci globals jika ingin menggunakan function biasa
//TODO silah buka komenar ini untuk melihat
// $cek =  function (data $object) use ($Errorx) {

//     if (!isset($object->user_name)) {
//         throw new CekError("error tidak ada username");
//     } else if (!isset($object->email)) {
//         // ini object nya langasung di buat di baris ini
//         throw new CekError("error tidak ada email");
//     } else if ($object->user_name == "") {
//         //* pada baris ini, 
//         throw $Errorx;
//     }
// };


## try-cath

//saat kita membuat exception kita bisa memprediksi error apa yang akan terjadi
/**
 * tetapi jika terajdi exception dan tidak di tangkap maka akan terjadi error , ini menyababkan kode program program berhenti di eksekusi sehingga kode program di di bawah nya tidak akan berjalan
 * 
 * untuk menangani hal itu kita menggunankan try-catch dimana block try berguna menangai kode program yang berhasil di ekseksui dan block cath berguna untuk menangani / menangkap error nya
 * 
 * 
 * catch() memiliki parameter harus class / object dari class exception bawaan / turunannya atau class exception yang kita buat
 * sehingga kode program dibawahnya tetap akan berjalan
 * 
 */



// kita buat object ke dua biar beda
$user2 = new data();
// $user2->user_name = "messi";
$user->email = "messi.com";


//kita tetap menggunakan function validasi

try {
    validasi($user2);
} catch (CekError $Errorx) {

    echo "error nya adalah {$Errorx->getMessage()}"; // tidak ada username, karena user name object nya kita belum buat, (karena kita buat komentar silahkan liaht di object $user2)
}
//Todo silahkan buka komentar di bawah ini, ini menggunakan exception bawaan
// catch (Exception $exception) {

//     echo "error nya adalah {$exception->getMessage()}";
// };


//* multiple trycatch
/**
 * kita juga bisa melakukan multiple trycatch, artinya bisa lebih dari satu trycat
 * 
 */

//todo silahkan buka komentar di bawah ini
// try {
//     validasi($user2);
// } catch (CekError $Errorx) {

//     echo "error nya adalah {$Errorx->getMessage()}"; // tidak ada username, karena user name object nya kita belum buat, (karena kita buat komentar silahkan liaht di object $user2)
// }
// catch (Exception $exception) {

//     echo "error nya adalah {$exception->getMessage()}";
// };

//* multiple trycath 2
/**
 * ini sama saja hanya beda cara menulis saja
 * dimana paremeter ny kita gunakan pipa, mirip operator bitwise pada javascript,
 * catch(exception1 | exception2 $error){
 *  echo $error->getMessage();
 * }
 */


try {
    validasi($user2);
    // cara menulis multiple trycat menggabungkan dengan tanda pipe |
} catch (CekError | Exception $Errorx) {

    echo "error nya adalah {$Errorx->getMessage()}"; // tidak ada username, karena user name object nya kita belum buat, (karena kita buat komentar silahkan liaht di object $user2)
}


//* finaly
/**
 * selain trycatch ada juga block kode finaly, ini adalah block yang akan selalu di eksekusi 
 * apapun hasil nya baik itu try atau catch
 * 
 * dengan perilaku seperti ini kita bisa memamnfaatkan block kode finally ini sesuai yang kita perlukan
 * misalnya kita gunakan untuk menutup koneksi ketika / saat kita baru saja menarik data
 * atau pada contoh bahasa pemrograman javascript, kita bisa memafaatkan nya "terimakasi telah mengirim file"
 * jadi berhasil atau tidak berhasil kode ini akan tetap di eksekusi
 * 
 * jadi tergantung kita ingin menggunakan sesuai keperluan
 */


try {
    validasi($user2);
    // cara menulis multiple trycat menggabungkan dengan tanda pipe |
} catch (CekError | Exception $Errorx) {

    echo "error nya adalah {$Errorx->getMessage()}" . PHP_EOL; // tidak ada username, karena user name object nya kita belum buat, (karena kita buat komentar silahkan liaht di object $user2)
} finally {
    echo "ini dari block finally akan selalu di eksekusi";
}



//* Debug Exception
// exception memiliki sebuah function getTrace()
/**
 * function ini berisikan / meretrun dari sebuah exception dengan detail yang lengkap seperti , baris ke berapa yang error, lokasi file samapai argument ny
 * ini sangat cocok untuk kita gunakan untuk mendebug dengan var_dump
 * 
 * lalu ada juga getTraceAsString() ini juga sama, hanya return nya berbentuk string jadi kita bisa echo
 */



$user3 = new data();

try {
    validasi($user3);
} catch (CekError $Errorx) {

    //ini mereturn string
    // echo $Errorx->getTraceAsString();

    //dump trace , mereturn array / object
    var_dump($Errorx->getTrace());

    $file = $Errorx->getTrace();
    // var_dump($file[0]["args"]);
}
