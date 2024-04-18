<?php
$meses = array(
    1 => "Janeiro",
    2 => "Fevereiro",
    3 => "Março",
    4 => "Abril",
    5 => "Maio",
    6 => "Junho",
    7 => "Julho",
    8 => "Agosto",
    9 => "Setembro",
    10 => "Outubro",
    11 => "Novembro",
    12 => "Dezembro"
);


if (isset($_POST['numero']) && filter_var($_POST['numero'], FILTER_VALIDATE_INT) !== false) {
    $numero = $_POST['numero'];
    if ($numero >= 1 && $numero <= 12) {
        echo "<p>O mês correspondente ao número $numero é: " . $meses[$numero] . "</p>";
    } else {
        echo "<p>O número digitado está fora do intervalo válido, digite outro número.</p>";
    }
} else {
    echo "<p>Por favor, digite um número inteiro válido entre 1 e 12.</p>";
}

?>