<?php
    $alunos = isset($_POST['alunos']) ? $_POST['alunos'] : array();
    $maior_nota = 0;
    $aluno_maior_nota = '';
    $total_notas = 0;
    $num_alunos = 0;

    #forzinho
    foreach ($alunos as $aluno) {
        $nota = $aluno['nota'];
        $total_notas += $nota;
        $num_alunos++;
        if ($nota > $maior_nota) {
            $maior_nota = $nota;
            $aluno_maior_nota = $aluno['nome'];
        }
    }

    if ($num_alunos > 0) {
        $media = $total_notas / $num_alunos;
        echo "Média da classe: " . number_format($media, 2, ',', '.') . "<br>";
    } else {
        echo "Não há alunos para calcular a média<br>";
    }

    if ($aluno_maior_nota != '') {
        echo "Aluno com a maior nota: " . $aluno_maior_nota . " (" . $maior_nota . ")";
    } else {
        echo "Não há alunos para determinar o aluno com a maior nota<br>";
    }
?>