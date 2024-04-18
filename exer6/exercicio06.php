<?php



    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];

    if ($valorA > $valorB) {
        echo "Valores em ordem crescente: $valorB - $valorA";
    } elseif ($valorB > $valorA) {
        echo "Valores em ordem crescente: $valorA - $valorB";
    } else {
        echo "Números iguais: $valorA";
    }
?>