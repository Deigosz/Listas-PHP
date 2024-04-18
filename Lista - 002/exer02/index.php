<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios</title>
</head>
<body>
    <form action="exercicio02.php" method="post">
        <?php
        for ($i = 0; $i < 10; $i++) {
            echo '<input type="number" name="numero[' . $i . '][num]" placeholder="Insira um número ' . $i . '">';
            echo '<br>';
        }
        ?>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>