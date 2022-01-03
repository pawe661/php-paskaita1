<?php


class Startlvl2 extends Start {


    public static function testToContinue(){

     $testval = parent:: testToStart();
        $testval = 'Tekstas iš dviejų klasių' . $testval ;
      return $testval;
    }
}