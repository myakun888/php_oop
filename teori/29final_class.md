# final class

final class adalah fitur yang di gunakan pada class agar class tersebut tidak bisa / membatasi untuk membuat inhertance lagi

artinya jika sebua class di beri kata kuncit `final` maka class tersebut tidak bisa lagi di extendes/ menjadi parents dari class lain


```php
class facebook  {

    public $company = "meta";

}

 final class instagram extends facebook {
    public $name = "instagram";

}

// ini error karena instagram sudah kita kasih final class
class wa extends instragram {

}

// tidak error karena facebook masih class normal
class wa extends facebook {

}

```
