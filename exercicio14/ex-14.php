<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        class valida {

            public $c;
            public $c1;

            function criador($c, $c1) {
                $this->c = $c;
                $this->c1 = $c1;
            }

            function toString() {
                if ($this->c === $this->c1) {

                    echo "Strings Iguais!";
                } else {
                    echo "String Diferente!";
                }
            }

        }

        $calc = new valida();
        $calc->criador($_GET['caracter'], $_GET['caracte']);
        $calc->toString();
        ?>

    </body>
</html>






