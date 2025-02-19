# final function

- jika seblum ny final class berguna untuk membatasi suatu class agar tidak bisa lagi di extends,
- maka final function berguna agar suatu function tidak bisa lagi override di class turunan nya / child class nya
- ini sangat cocok agar sebuah method / function di sebuah class tidak bisa di ubah oleh class child nya


```php

class facebook  {

    public $company = "meta";
final function cek () {
    echo "ini group meta";
}

}

 class instagram extends facebook {
    public $name = "instagram";

// ini error , karena kita sudah membuat final class, maka function cek tidak bisa lagi di override di child class nya
    function cek (){
        echo "testing";
    }

}



```

