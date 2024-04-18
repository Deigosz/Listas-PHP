<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios</title>
</head>
<body>
    <form action="exercicio6.php" method="post">
        <?php
        for ($i = 0; $i < 5; $i++) {
            echo '<input type="text" name="produtos[' . $i . '][nome]" placeholder="Nome do Produto: ">';
            echo '<input type="number" name="produtos[' . $i . '][preco]" placeholder="Preço do produto R$: ">';
            echo '<br>';
        }
        ?>
        <button type="submit" name="submit">Enviar</button>
    </form>
</body>
</html>