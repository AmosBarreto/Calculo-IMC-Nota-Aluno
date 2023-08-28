<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo do IMC</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">>
</head>
<body>
    <?php
        $peso=$_POST['peso'];
        $altura=$_POST['altura'];
        $imc=$peso/pow($altura,2);
        str_replace($peso, $altura);
        echo "<h1 class='text-center'>Resultado</h1>";
        if ($imc<17){
            echo "<input type='text' class='form-control col-6 mx-auto' value=" .$imc. ">";
            echo "<h3 class='text-center'>Muito abaixo do Peso</h3>";
        }
        else if($imc>=17 and $imc<=18.49){
            echo "<input type='text' class='form-control col-6 mx-auto' value=" .$imc. ">";
            echo "<h3 class='text-center'>Abaixo do Peso</h3>";
        }
        else if($imc>=18.5 and $imc<=24.99){
            echo "<input type='text' class='form-control col-6 mx-auto' value=" .$imc. ">";
            echo "<h3 class='text-center'>Peso Normal</h3>";
        }
        else if($imc>=25 and $imc<=29.99){
            echo "<input type='text' class='form-control col-6 mx-auto' value=" .$imc. ">";
            echo "<h3 class='text-center'>Acima do Peso</h3>";
        }
        else if($imc>=30 and $imc<=34.99){
            echo "<input type='text' class='form-control col-6 mx-auto' value=" .$imc. ">";
            echo "<h3 class='text-center'>Obesidade I</h3>";
        }
        else if($imc>=35 and $imc<=39.99){
            echo "<input type='text' class='form-control col-6 mx-auto' value=" .$imc. ">";
            echo "<h3 class='text-center'>Obesidade II (severa)</h3>";
        }
        else($imc>=40){
            echo "<input type='text' class='form-control col-6 mx-auto' value=" .$imc. ">";
            echo "<h3 class='text-center'>Obesidade III (Mórbida)</h3>";
        }
    ?>    
</body>
</html>
