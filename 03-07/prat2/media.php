<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando 2</title>
    <style>
        body {
            padding-left: 5%;
            padding-top: 1%;
            font-family: 'Roboto', sans-serif;
        }
        input, select, button{
            border-radius: 3px;
            border: 1px solid lightgrey;
            height: 40px;
            margin-bottom: 10px;
        }
        label{
            margin: 0 10px 0 30px;
        }
        button{
            border-radius: 5px;
            padding: 0 15px;
            margin: 20px 10px 0 0;
        }
        .calcular {
            background-color: #198754 ;
            color: white;
            margin-left: 30px;
        }
        .limpar {
            background-color: #ffc107;
            color: black;
        }
    </style>
</head>
<body>
    <h1>Praticando 2 - Calculadora de média</h1>
    <hr>
    <?php
    $nota1 = filter_input(INPUT_POST, "nota1", FILTER_SANITIZE_SPECIAL_CHARS);
    $nota2 = filter_input(INPUT_POST, "nota2", FILTER_SANITIZE_SPECIAL_CHARS);
    $nota3 = filter_input(INPUT_POST, "nota3", FILTER_SANITIZE_SPECIAL_CHARS);
    $media = ($nota1 + $nota2 + $nota3)/3;
    
    if($media < 4){
        $resultado = "REPROVADO";
        echo "<style>
            .resultado {
                color: red;
            }
        </style>";
    } elseif($media >= 4 && $media < 6){
        $resultado = "DE RECUPERAÇÃO";
        echo "<style>
            .resultado {
                color: orange;
            }
        </style>";
    } else {
        $resultado = "APROVADO";
        echo "<style>
            .resultado {
                color: green;
            }
        </style>";
    }

    echo "<p>Um aluno com as notas <span>". $nota1 ."</span>, <span>". $nota2 ."</span> e <span>". $nota3 ."</span> tem uma média igual a <span>". $media ."</span></p>";
    echo "<p>Com essa média o aluno está <span class='resultado'>". $resultado ."</span></p>";
    ?>

    <br>
    <a href="index.html">Voltar à calculadora</a>

    <style>
        span{
            font-weight: bold;
        }
        .resultado{
            text-decoration: underline;
        }
    </style>
</body>
</html>