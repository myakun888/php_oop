# trait overriding

## trait abstract function
- kita sudah tau y, trait bisa membuat function konkrit (function bisa) dan abstaract function
- artinya jika kita membuat abstarct function di trait kita wajib mengoveride di class yang menggunakan trait tersebut

```php

trait data_satu {

    abstract function doa2();
}


class Manusia {
    use data_satu; // kita mengggunakan trait;

// kita wajib mengoverid function doa2, karena di buat di trait nya adalah abstract function
 function doa2 (){
 public  echo "bismillah";
}

}

```

## trait overriding
trait memiliki perilaku overridin sebagai berikut

- jika di dalam sebuah parent class membuat function yang nama nya sama dengan function yang ado di dalam trait yang di gunakanan saat ini
- maka fungsi, function di class tersebut akan di timpa / di override oleh function dari trait
- namun saat kita membaut child class dan kita buat object dari child class nya , maka jika kita memiliki nama function yang sama , function yang ada di trait akan di timpa oleh function yang ada di chil class

secara floww nya seperti ini


parent class = di override oleh => trait = di oveerride oleh => child clas

**case 1**

```php
trait data1 {
    function doa  (){
        echo "doa dari data 1";
    }
};

class manusia {
    function doa (){
        echo "doa dari manusia";
    }
}
$human = new manusia();

$manusia->doa() // doa dari manusia

//ini masih normal

```



**case 2**

perhatikan ini baik baik
pada case 2, kita pisahkan
trait data1 memiliki function doa
class manusia memiliki function doa

lalu kita buat class manusia2 , dimana pada claas ini mengextends dari class manusia (menjadi parents)

secara default class manusia memiliki function dari class parent manusia,
tapi karena menggukan trait data1, dimana data 1 memiliki function dengan nama yang sama , maka function yang di terait yang berjalan
atau function trait mengoveride function dari parents class dengan nama yang sama
kecuali di child class ny di buat dengan nama yang sama , maka trait akan di override oleh child class
seperti alur dibibawah ini (sudah di jelaskan di atas awal td)

**parent class = di override oleh => trait = di oveerride oleh => child clas**

contoh
```php

trait data1 {
    function doa  (){
        echo "doa dari data 1";
    }
};

class manusia {
    function doa (){
        echo "doa dari manusia";
    }
}

class manusia2 extends  manusia {
    use data1 ;
    // function doa (){
    // echo "ini dari manusia dua"
    //  };
}

$human = new manusia2();

$manusia->doa() // doa dari trait,

//kecuali jika di class manusia2 ,kita membuat function doa / dengan nama yang sama
// hilangakn komentara pada function doa di manusia2
//maka yang jalan adalah dari childnya
```





## trait visiblity override;

selain override terhadap function nya kita juga bisa override visibilit nya

contoh kita membuat properti / function yang selumnya public jika kita ingin override menjadi private bisa kita lakukan
atau megoverride sebaliknya


cara nya 
buka dengan tanda kurung {
    namafunction as vislblitnya
}

```php

trait datax {
public    function doa {
        echo "doa dari data x";
    }
public    function doa2 {
        echo "doa2 dari data x";
    }
};


trait datay {
  public  function doa3 {
        echo "doa3 dari datay"; 
    }
};


class manusia {
// kita membuat visibliti doa1 menjadi private , dimana sebelumnya adalah public
use datax , datay {
        doa1 as private; //  
    }
}

//jadi kita juga bisa mengoverride visiblity , baik menjadi private, public atau protected



```