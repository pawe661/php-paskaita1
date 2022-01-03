<?php   

spl_autoload_register('myAutoloader');

function myAutoloader($className)
{
    $path = './classes/';

    include $path.$className.'.php';
}

$start = new Start();
echo $start ->testToStart();


$Startlvl2 = new Startlvl2();
echo $Startlvl2 ->testToContinue();

