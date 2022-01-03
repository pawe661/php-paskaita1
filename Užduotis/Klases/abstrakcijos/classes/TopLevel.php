<?php

class TopLevel extends \classes\Abstrakcija {

    public function testMetodas() {
        return 'Test Metodas';
    }

    public function metodasSuArgumentu($test) {
        return 'Metodas su argumentu grąžina: ' . $test;
    }

}