<?php

spl_autoload_register(function () {
    include './classes/Abstrakcija.php';
    include './classes/TopLevel.php';
    include './classes/Child.php';
    include './Modules/Maxima/Classes/Abstrakcija.php';
    include './Modules/Rimi/Classes/Rimi.php';
});

use Modules\Rimi\Classes\Rimi;

$topLevel = new TopLevel();

echo $topLevel->metodasSuArgumentu('12340');

$child = new Child();

echo '<br />' . $child->papildomasMetodas();

$rimi = new Rimi();

echo '<br />';

echo $rimi->kaina();
