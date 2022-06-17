<?php
//Abstract class
require_once("./Animal.php");

abstract class Feline{
    public $whisker_type;
    public $wild;

    abstract public function throwObjectInstance();

    public function isDomestic($wild){
        if($wild == "wild"){
            $this->$wild = $wild;
            return "im a wild cat like lince";
        }else{
            return "im a cute comestic cat";
        }
    }
}