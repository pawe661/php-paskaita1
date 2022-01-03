<?php

class FirstH {

    public $object1;

    public function __construct(){
      $this -> object1 = (object)[];
    }

    public function addValue(){
        for ($i=0; $i < 30; $i++) { 
            $this -> object1 -> $i = rand(5,25);
        }
        
    }
}