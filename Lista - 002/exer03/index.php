<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios</title>
</head>
<body>
    <form action="exercicio3.php" method="post">
        <?php
        for ($i = 0; $i < 10; $i++) {
            echo '<input type="number" name="numeros[]" placeholder="Insira um número: ' . $i . '">';
        }
        ?>
        <label>Informe o número que multiplicará os números indicados anteriormente: </label>
        <input type="number" name="valor">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>