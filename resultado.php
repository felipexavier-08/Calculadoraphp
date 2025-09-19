<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <style>
        .retornar {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            border-radius: 8px;
            background: pink;
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <h3>
    <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $a = $_POST["a"];
            $b = $_POST["b"];
            $op = $_POST["operacao"];
            $res = 0;

            if ($op === "adicionar") $res = $a + $b;
            if ($op === "subtrair") $res = $a - $b;
            if ($op === "multiplicar") $res = $a * $b;
            if ($op === "dividir") {
                if ($b != 0) {
                    $res = $a / $b;
                } else {
                    $res = "Erro: divisão por zero";
                }
            }

            echo "O resultado é: $res";
        }
    ?>
    </h3>

    <a href="index.php" class="retornar">Voltar</a>

</body>
</html>
