<?php

class valida {

    public $v;
    private $i;
    private $t = 1;

    function criador($v) {
        $this->v = $v;
    }

    function toString() {
        for ($this->i = 1; $this->i <= $this->v; $this->i++) {
            $this->t *= $this->i;
        }
        echo $this->v, "!: ", $this->t;
    }

}

$calc = new valida();
$calc->criador($_GET['v']);
$calc->toString();
