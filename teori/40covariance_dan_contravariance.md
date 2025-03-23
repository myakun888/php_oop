# covariance dan contravariance

## covariance
- saat kita mengoverride sebuah function dari class, kita juga akan membuat function yang sama pada parent class
- covariance memungkinkan kita untuk mengoverride function dari parent class dengan  mereturn lebih spesifik


contoh

pada contoh ini kita akan membuat interface "Animalshelter" yang memiliki abstrac function 

lalu kita memiliki class DogShelter, dan class CatShelter yang akan mengoverride class tersenbut dengan lebih spesifik
```php

interface Animalshelter

//pada interface ini kan mereturn animal
{
    function adop(string $name): animal;
}




class DogShelter implements Animalshelter {

// di class ny kita buat lebih specifik dari animal kita buat dog
    function adop(string $name):dog
    {
        $dog = new Dog();
        $dog->name = $name
        return $dog
    }
}

// di class ny kita buat lebih specifik dari animal kita buat cat
class CatShelter implements Animalshelter{
function adop(string $name):dog
    {
        $cat = new cat();
        $cat->name = $name
        return $cat
    
}
    
}

```




## contravariance

contravariance adalah kebalikan dari covariance, memperbolehkan sebuah child class untuk membuat / mengoverride function argument yang lebih tidak specifik


```php

class food{
    
}

class Animalfood extends food {

}



abstract class Animal {

    public $name;

    public abstract function eat(Animalfood $food);
}



class Cat extends Animal{

// ini kan spesifik, animal food , memang makanan hewan
    public function eat(Animalfood $foot){
        echo "cat eat animalfood";
    }
}

class Dog extends Animal {

//ini kito pake,food , 
    public function eat(food $foot){
        echo "dog eat food";
    }
}
```


fitur ini ada di php, walaupun jarang di gunakan setidak nya kita tahu,