<?php

class valida {

    public $n1;
    public $n2;
    public $n3;
    public $n4;
    private $m;

    function criador($n1, $n2, $n3, $n4) {
        $this->n1 = $n1;
        $this->n2 = $n2;
        $this->n3 = $n3;
        $this->n4 = $n4;
    }

    function toString() {
        $this->m = ($this->n1 + $this->n2 + $this->n3 + $this->n4) / 4;
        if ($this->m >= 7) {
            echo "Aprovado";
        } else {
            echo "Reprovado";
        }
    }

}

$calc = new valida();
$calc->criador($_GET['n1'], $_GET['n2'], $_GET['n3'], $_GET['n4']);
$calc->toString();
