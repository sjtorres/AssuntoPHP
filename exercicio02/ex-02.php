<?php

class valida {

    public $valor;

    function validacao() {
        if ($this->valor >= 10) {
            echo "o valor é maior ou iguala 10";
        } else {
            echo "o valor é menor ou igual a 10";
        }
    }
}

$calc = new valida();
$calc -> valor = $_GET['valor'];
$calc -> validacao();