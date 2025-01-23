# destruktor
jika construktor adalah function yang di panggil ketika object dibuat
maka **destruktor adalah function yang di panggil ketika object sudah di hapus dari memmori**
biasanya ketika object itu sudah tidak ada lagi atau ketika aplikasi berhenti


## membuat destruktur
membuat destruktur `__destruc()`
kusus destruktur kita tidak boleh memasang return value


```php
class oke {

    var $name;
    function __construk(){

    }

    function _destruc():void  // :void adalah return tipe yang berati tidak ada return value, boleh di tulis or juga tidak
    {
        echo "file berhasil "
    }
}


```

## penggunaan nya
biasa nya di gunakan untuk menutup koneksi database, atau proses menulis ke file, agar tidak ada memori leak


