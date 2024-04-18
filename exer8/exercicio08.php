<?php
    $area = $_POST['valor'];

    $tinta = $area / 3;
    $lata = ceil($tinta / 18);
    $total = $lata * 80; 

    echo "A quantidade de lata(s) de tinta necessária(s) é(são): $lata<br>";
    echo "Preço total: R$ " . number_format($total, 2, ',', '.');
?>