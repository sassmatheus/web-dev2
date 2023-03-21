<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando 2 - Contador</title>
    <style>
        body {
            padding-left: 5%;
            padding-top: 1%;
            font-family: 'Roboto', arial;
        }
    </style>
</head>
<body>
    <h1>Praticando 2 - Contador</h1>
    <hr>
    <h2>Parâmetros informados:</h2>
    <?php 
    if($_POST){
        $inicio = filter_input(INPUT_POST, 'inicio');
        $final = filter_input(INPUT_POST, 'final');
        $incremento = filter_input(INPUT_POST, 'incremento');
        $sucesso = false;

        echo "<p>Início: $inicio</p>";
        echo "<p>Final: $final</p>";
        echo "<p>Incremento: $incremento</p> <br>";
        
        if($inicio <= $final){
            for($i = $inicio; $i <= $final; $i += $incremento){
                echo "<span>$i </span>";
            }
        } else{
            for($i = $inicio; $i >= $final; $i -= $incremento){
                    echo "<span>$i </span>";
                }
        } 

        echo "<p><a href='./'>Voltar</a></p>";
    }
    
    ?>
</body>
</html>