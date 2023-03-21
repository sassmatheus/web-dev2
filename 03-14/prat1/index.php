<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
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
        .enviar {
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
    <h1>Praticando 1 - Tabuada</h1>
    <hr>
    <form method="GET">
        <label for="tabuada">Número:</label>
        <input type="number" name="tabuada" id="tabuada" required>
        <div>
            <button type="submit" class="enviar">Enviar</button>
            <button type="reset" class="limpar">Limpar</button>
        </div>
    </form>
    
    <p><a href="../index.html">Voltar ao menu de exercícios</a></p>

    <?php 
        if($_GET){
            $num = filter_input(INPUT_GET, 'tabuada');
            
            echo "<hr><h1>Tabuada do $num</h1>";
            for($i = 1; $i<=10; $i++){
                $result = $num * $i;
                echo "<p>$num x $i = $result</p>";
            }
            echo "<br><a href='./'>Apagar</a>";
        }
    ?>

</body>
</html>