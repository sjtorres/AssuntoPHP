<?php

class valida {

    public $a;
    public $s;
    private $t;

    function criador($a, $s) {
        $this->a = $a;
        $this->s = $s;
    }

    function toString() {
        if ($this->s == "F") {
            $this->t = (62.1 * $this->a) - 44.7;
            echo "O Peso ideal é ", $this->t;
        } else if ($this->s == "M") {
            $this->t = (72.7 * $this->a) - 58;
            echo "O Peso ideal é ", $this->t;
        }
    }

}

$calc = new Pessoa();
$calc->criador($_GET['a'], $_GET['s']);
$calc->toString();
