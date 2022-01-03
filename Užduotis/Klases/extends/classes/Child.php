<?php

class Child extends TopLevel {

    const VALUE = 'Test klasės VALUE konstanta';

    public static $value = 'Test klasės value savybe(property)';

    public static function testMetodas() {

        //$this-> Naudojame kai inicijuojame objekta
        //self::  Naudojame kai bandome paimti informacija is statines klases
        //parent:: Naudojame kai bandome paimti kažką iš klasės kurią praplečiame.
        return self::$value;

    }

    public static function takeFromParent() {

        return parent::parentMethod();

    }

}
