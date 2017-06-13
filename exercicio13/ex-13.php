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
            private $i;
            private $total;

            function criador($c) {
                $this->c = $c;
            }

            function toString() {

                $this->total = $this->c;
                echo "O total de caracteres é: ", strlen($this->total), "<br>";

                for ($this->i = 1; $this->i < strlen($this->total); $this->i++) {

                    echo $this->i, "<br>";
                }
            }

        }

        $calc = new valida();
        $calc->criador($_GET['caractere']);
        $calc->toString();
        ?>

    </body>
</html>
