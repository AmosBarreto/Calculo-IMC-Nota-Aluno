DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <?php
        function parseNumber($number) {
            return str_replace(',', '.', $number);
        }
        if (isset($_POST["peso"]) && isset($_POST["altura"])) {
            $peso = parseNumber($_POST["peso"]);
            $altura = parseNumber($_POST["altura"]);

           
            $imc = $peso / ($altura * $altura);

           
            echo "Seu IMC é: " . number_format($imc, 2) . "<br><br>";

            if ($imc < 17) {
                echo "Situação: Muito abaixo do peso";
            } elseif ($imc >= 17 && $imc < 18.5) {
                echo "Situação: Abaixo do peso";
            } elseif ($imc >= 18.5 && $imc < 25) {
                echo "Situação: Peso normal";
            } elseif ($imc >= 25 && $imc < 30) {
                echo "Situação: Acima do peso";
            } elseif ($imc >= 30 && $imc < 35) {
                echo "Situação: Obesidade I";
            } elseif ($imc >= 35 && $imc < 40) {
                echo "Situação: Obesidade II (severa)";
            } else {
                echo "Situação: Obesidade III (mórbida)";
            }
    }
    ?>
    <h2>Calculadora de IMC</h2>
    <form action="upload.php" method="post">
        <label for="peso">Peso (em quilos):</label>
        <input type="text" name="peso" id="peso" required><br><br>
       
        <label for="altura">Altura (em metros):</label>
        <input type="text" name="altura" id="altura" required><br><br>
       
        <input type="submit" value="Calcular">
    </form>
</body>
</html>

2)  
<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Média</title>
</head>
<body>
<?php
    function nmrflutuante($number) {
        return str_replace(',', '.', $number);
    }
    if (isset($_POST["nome"]) && isset($_POST["nota1"]) && isset($_POST["nota2"])) {
        $nome = $_POST["nome"];
        $nota1 = nmrflutuante($_POST["nota1"]);
        $nota2 = nmrflutuante($_POST["nota2"]);

       
        $media = ($nota1 + $nota2) / 2;

       
        echo "Aluno: " . $nome . "<br><br>";
        echo "Média: " . number_format($media, 2) . "<br><br>";

        if ($media < 4) {
            echo "Situação: Reprovado";
        } elseif ($media >= 4 && $media < 6) {
            echo "Situação: Exame final";
        } else {
            echo "Situação: Aprovado";
        }
    }
    ?>
    <h2>Calculadora de Média</h2>
    <form action="upload.php" method="post">
        <label for="nome">Nome do Aluno:</label>
        <input type="text" name="nome" id="nome" required><br><br>
       
        <label for="nota1">Nota 1:</label>
        <input type="text" name="nota1" id="nota1" required><br><br>
       
        <label for="nota2">Nota 2:</label>
        <input type="text" name="nota2" id="nota2" required><br><br>
       
        <input type="submit" value="Calcular Média">
    </form>
</body>
</html>
