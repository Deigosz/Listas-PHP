<?php

if (isset($_POST["numeros"]) && isset($_POST["valor"])) {
    $numeros = $_POST["numeros"];
    $valor = $_POST["valor"];

    foreach ($numeros as $numero) {
        $resultado = $numero * $valor;
        echo "<p>$numero * $valor = $resultado</p>";
    }
}

?>