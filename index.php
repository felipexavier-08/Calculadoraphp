<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcule aqui</title>
</head>
<body>

    <h1>Calcule aqui</h1>

    <form action="./resultado.php" method="POST">

        <label for="a">Número A:</label>
        <input type="number" name="a" id="a" required>
        <br>

        <label for="b">Número B:</label>
        <input type="number" name="b" id="b" required>
        <br>

        <label for="operacao">Operação:</label>
        <select name="operacao" id="operacao">
            <option value="adicionar">Adicionar</option>
            <option value="subtrair">Subtrair</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>
        <br><br>

        <button type="submit">=</button>

    </form>

</body>
</html>
