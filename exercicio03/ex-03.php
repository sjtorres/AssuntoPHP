<?php

class valida {

    public $valor;

    function validacao() {
        if ($this->valor == 0) {
            echo "Igual a zero";
        } else if ($this->valor > 0) {
            echo "Valor Positivo";
        } else {
            echo "Valor Negativo";
        }
    }
}

$calc = new valida();
$calc->valor = $_GET['valor'];
$calc->validacao();
