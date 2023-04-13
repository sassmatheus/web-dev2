<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex02</title>
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
            box-sizing: border-box;
        }
        label{
            margin: 0 10px 0 30px;
            width: 400px;
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
        .peso{
            font-size: smaller;
            color: grey;
        }
        .corpo{
            display: flex;
            justify-content: space-between;
            width: 100%;
        }
        .resultado{
            margin-right: 10%;
        }

    </style>
</head>
<body>
    <h1>Exercício 2 - Calculadora de médias 2.0</h1>
    <hr>
    <div class="corpo">
        <div class="formulario">
            <form method="POST">
                <div>
                    <label for="avaliacoes">Nota avaliações:</label>
                    <input type="number" name="avaliacoes" id="avaliacoes" required>
                    <label for="peso" class="peso">Peso 5.0</label>
                </div>
                <div>
                    <label for="trabalhos">Nota trabalhos:</label>
                    <input type="number" name="trabalhos" id="trabalhos" required>
                    <label for="peso" class="peso">Peso 2.0</label>
                </div>
                <div>
                    <label for="praticandos">Nota praticandos:</label>
                    <input type="number" name="praticandos" id="praticandos" required>
                    <label for="peso" class="peso">Peso 3.0</label>
                </div>
                
                <button type="submit" class="calcular">Calcular média</button>
                <button type="reset" class="limpar" onclick="window.location.href = '.'">Limpar</button>
            </form>
        </div>
        <div class="resultado">
            <?php
                if($_POST){
                    $avaliacoes = filter_input(INPUT_POST, "avaliacoes", FILTER_SANITIZE_SPECIAL_CHARS);
                    $trabalhos = filter_input(INPUT_POST, "trabalhos", FILTER_SANITIZE_SPECIAL_CHARS);
                    $praticandos = filter_input(INPUT_POST, "praticandos", FILTER_SANITIZE_SPECIAL_CHARS);
                    $media = ($avaliacoes * 0.5 + $trabalhos * 0.2 + $praticandos * 0.3);
                    
                    $notas = ["Avaliações: " => $avaliacoes, "Trabalhos: " => $trabalhos, "Praticandos: " => $praticandos];
                    arsort($notas);
                    
                    echo "<h2>Notas informadas (em ordem decrescente)</h2>";

                    foreach($notas as $i => $valor) {
                        echo "<p>$i <span>$valor</span></p>";
                    }

                    echo "<br><p>Média final: <span>$media</span></p>";
                }
            ?>

            <style>
                span{
                    font-weight: bold;
                }
            </style>
        </div>
    </div>
</body>
</html>