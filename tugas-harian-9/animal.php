<?php



class Animal {
    protected $legs = 2;
    protected $cold_blooded = false;
    protected $name;

    function __construct($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name . "<br>";
    }

    function get_legs(){
        return $this->legs . "<br>";
    }

    function get_cold_blooded(){
        if($this->cold_blooded){
            return "Yes <br>";
        }
        return "No <br>";
    }

}