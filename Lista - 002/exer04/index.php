<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios</title>
    <style>
        /*errado*/
        form input[type="number"] {
            width: calc(100% - 12px);
            padding: 8px; 
            margin-bottom: 15px; 
        }
    </style>
</head>
<body>
    <form action="exercicio04.php" method="post">
        <input type="number" name="numero" placeholder="Digite um número entre 1 e 12" min="1" max="12">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
