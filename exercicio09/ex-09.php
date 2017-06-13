<?php

class valida {

    public $v;
    private $i;

    function criador($v) {
        $this->v = $v;
    }

    function toString() {
        for ($this->i = 0; $this->i <= $this->v; $this->i++) {
            echo $this->i, " ";
        }
    }

}

$calc = new valida();
$calc->criador($_GET['v']);
$calc->toString();
