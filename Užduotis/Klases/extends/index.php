<?php

spl_autoload_register(function () {
    include './classes/TopLevel.php';
    include './classes/Child.php';
});

//$child = new Child();
//echo $test->testMetodas();
echo Child::takeFromParent();
