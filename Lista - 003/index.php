<?php
require_once "Utils/cabecalho.php"

?>

<form action="resposta01.php" method="post">
    <div class="row">
        <div class="col">
            <label for="valor1" class="form-label">Informe o valor 1:</label>
            <input type="number" name="valor1" id="valor1" class="form-control">
        </div>
        <div class="col">
            <label for="valor1" class="form-label">Informe o valor 2:</label>
            <input type="number" name="valor2" id="valor2" class="form-control">
        </div>
    </div>
    <div class="col">
        <button type="submit" class="btn btn-danger">Enviar</button>
    </div>
</form>