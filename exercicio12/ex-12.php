<?php

class valida {

    public $v1;
    public $v2;
    public $t = 0;
    private $i;

    function criador($v1, $v2) {
        $this->v1 = $v1;
        $this->v2 = $v2;
    }

    function toString() {
        for ($this->i = 1; $this->i <= $this->v1; $this->i++) {
            $this->t += $this->v2;
        }
        echo $this->t;
    }

}

$calc = new valida();
$calc->criador($_GET['v1'], $_GET['v2']);
$calc->toString();
