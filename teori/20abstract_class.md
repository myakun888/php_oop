# abstract class

- terminologi dari abstract adalah antara ada atau tak ada

pada php kita bisa selain membuat class seperti biasa , kita juga bisa membuat `class abstract`

abstract class artinya kita tidak bisa membuat object langsung (instance object ) dari class abstrack ini, tapi kita bisa membuat object dari class turunan nya


## abstrack class

untuk membuat class abstract kita bisa menggunakan kata kunci `abstract`

```php

abstract class MakhlukGaib {

}

class Malaikat extends MakhlukGaib{

}

$jibril = new MakhlukGaib(); // error, karena class MakhlukGaib adalah abstrack class

$jibril = new Malaikat()// ini bisa




```



