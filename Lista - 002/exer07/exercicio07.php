<?php
if(isset($_POST['submit'])){
  $aprovados = array();
  $reprovados = array();
  foreach ($_POST['alunos'] as $aluno) {
    $nome = isset($aluno['nome']) ? $aluno['nome'] : '';
    $nota1 = isset($aluno['nota1']) ? floatval($aluno['nota1']) : 0;
    $nota2 = isset($aluno['nota2']) ? floatval($aluno['nota2']) : 0;
    $media = ($nota1 + $nota2) / 2;
    $aluno['media'] = number_format($media, 2); // Arredonda 
    
    if (!empty($nome) && $nota1 >= 0 && $nota2 >= 0) { 
      if ($media >= 6) {
        $aprovados[] = $aluno;
      } else {
        $reprovados[] = $aluno;
      }
    }
  }
  echo "<p>Lista de aprovados:</p>";
  echo "<ul>";
  foreach ($aprovados as $aluno) {
    echo "<li>{$aluno['nome']} - Média: {$aluno['media']}</li>";
  }
  echo "</ul>";
  echo "<p>Lista de reprovados:</p>";
  echo "<ul>";
  foreach ($reprovados as $aluno) {
    echo "<li>{$aluno['nome']}</li>";
  }
  echo "</ul>";
}
?>