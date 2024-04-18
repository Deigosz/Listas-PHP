<?php

$valor = $_POST['valor'];
if ($valor > 0) {
    $mensagem = "Valor Positivo!";
}

elseif ($valor < 0) {
    $mensagem = "Valor Negativo!";
} 

else {
    $mensagem = "Valor igual a zero!";
}

?>