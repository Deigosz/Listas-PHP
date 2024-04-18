<?php
    $numero = isset($_POST['numero']) ? $_POST['numero'] : array();
    $positivos = 0;
    $negativos = 0;
    $pares = 0;
    $impares = 0;
    $zeros = 0;

    foreach ($numero as $num) {
        $valor = $num['num'];
        if ($valor > 0) {
            $positivos++;
        } elseif ($valor < 0) {
            $negativos++;
        } elseif ($valor == 0) {
            $zeros++;
        }
        if ($valor != 0) {
            if ($valor % 2 == 0) {
                $pares++;
            } else {
                $impares++;
            }
        }
    }

    echo "Positivos: $positivos <br>";
    echo "Negativos:  $negativos <br>";
    echo "Quantidade de zeros: $zeros <br>";
    echo "Pares: $pares <br>";
    echo "Ímpares: $impares <br>";
?>