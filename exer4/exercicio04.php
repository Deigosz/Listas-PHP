<?php
    $valor = $_POST['valor'];

    for ($cont = 0; $cont <= 10; $cont++) {
        $mult = $valor * $cont;
        echo "$valor x $cont = $mult <br>";
    }
?>