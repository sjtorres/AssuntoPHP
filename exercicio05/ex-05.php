<?php

class valida {

    public $a;
    public $b;

    function criador($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }

    function toString() {
        if ($this->a > $this->b) {
            echo $this->a, " ", $this->b;
        } else {
            echo $this->b, " ", $this->a;
        }
    }

}

$calc = new valida();
$calc->criador($_GET['a'], $_GET['b']);
$calc->toString();
