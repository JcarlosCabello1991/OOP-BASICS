<?php
require_once("./aliveAnimal.php");

class Animal implements aliveAnimal{
//Attributes
public $age;
public $fur;
public $vertebrates;
public $type;

public function __constructor($age, $fur, $vertebrates, $type){
    $this->age = $age;
    $this->fur = $fur;
    $this->vertebrates = $vertebrates;
    $this->type = $type;
}

//Methods of class Animal
public function Breath(){
    return "im breathing because i need it";
}

public function Move(){
    return "im sleeping on a chair";
}

public function Sound(){
    return "i need to know what animal i am";
}

public function __destructor(){
    echo "Eliminando el animal con edad " . $this->age;
}
}