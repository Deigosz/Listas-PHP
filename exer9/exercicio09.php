<?php
    $ano = $_POST['ano'];
    $ano_atual = $_POST['ano_atual'];

    $qtdanos = $ano_atual - $ano;
    $qtdias = $qtdanos * 365;
    $idade = 2025 - $ano;

    echo "Você já viveu $qtdanos anos até hoje... <br>";
    echo "Você já viveu $qtdias dias até hoje... <br>";
    echo "Em 2025, você terá $idade anos!";
?>