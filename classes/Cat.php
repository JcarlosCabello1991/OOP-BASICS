<?php
//Inherits animal class
require_once("./Animal.php");
class Cat extends Animal{
    public static $Breed;

    public function __construct($age, $fur, $vertebrates, $type, $Breed){
        parent::__constructor($age, $fur, $vertebrates, $type);
        //$this->Breed = $Breed;
        $this->setBreed($Breed);
    }

    public function Purr(){
        return "Ronroneando...";
    }

    public function setAge(){
        $this->age = ($this->age)*7;
    }

    public function getAge(){
        return $this->age;
    }

    public function setBreed($Breed){
        Cat::$Breed = $Breed;
    }

    public function getBreed(){
        return Cat::$Breed;
    }

    public function Sound(){
        return "Meow";
    }

    public function throwObjectInstance(){
        return "Im a cat";
    }
}

$cat = new Cat(2, true, true, "Mammal", "Persa");

$cat->setAge();

echo $cat->throwObjectInstance() . ", im " . $cat->getAge() . " years old, now im " . $cat->Purr() . "while " . $cat->Move() . ", " . $cat->Breath() . " and my sound is " . $cat->Sound() . " and my Breed is " . $cat->getBreed();