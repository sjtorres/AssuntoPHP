<?php

class valida {

    public $v1;
    public $v2;
    private $i;

    function criador($v1, $v2) {
        $this->v1 = $v1;
        $this->v2 = $v2;
    }

    function toString() {
        for ($this->i = $this->v1 + 1; $this->i <= $this->v2 - 1; $this->i++) {
            echo $this->i, " ";
        }
    }

}

$calc = new valida();
$calc->criador($_GET['v1'], $_GET['v2']);
$calc->toString();
