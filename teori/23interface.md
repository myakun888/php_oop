# interface

- sebelumnya sudah kita bahas , ada abstract class yang bisa kita gunakan untuk contrack child 
tapi sebenarnya ada interface yang lebih cocok jadi contract class

- interface mirip abstract yang membedakan dengan abstrack , interface semua method/function otomatis menjadi block, tanpa harus ada kanta kuncit abstrac di depan metod nya , dan tidak memiliki block
- di interface kita tidak boleh memiliki properties , yang di bolehkan hanya `constant`
- interface untuk mewariskan tidak menggunakan extends, tapi menggunakan kata kunci `implements`;
- satu class bisa menggunakan lebih dari satu interface;

## membuat interface

membuat interface cukup gunakan kata kunci interface

```php

namespace Data;


interface Car{

    function info();  

    function harga();
}

```
***note***
function yang ada di dalam sebuah interface otomatis menjadi abstract, jadi harus di override di class turunannya



## implement interface 
untuk mewariskan interface pada class, tidak menggunakan extends, melaikan menggunakan **implements**



```php

namespace Data;


interface Car{

    function info();  

    function harga();
}


class Avanza implements Car {

function info(){
    echo "ini avanza"
}

function harga(){
    echo "harga ny sekian juta ";
}
}
```