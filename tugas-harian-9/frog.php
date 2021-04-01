<?php

require_once('animal.php');

class Frog extends Animal{
    
    protected $legs = 4;

    function jump(){
        echo "hop hop <br>";
    }

}