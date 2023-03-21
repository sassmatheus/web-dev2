<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>  
    <div class="container">
      <h1>Praticando 4 - Gerador de tabela</h1>
      <hr>
      <?php 
        $linhas = filter_input(INPUT_POST, "linhas", FILTER_SANITIZE_SPECIAL_CHARS);
        $colunas = filter_input(INPUT_POST, "colunas", FILTER_SANITIZE_SPECIAL_CHARS);
        $estilo = filter_input(INPUT_POST, "estilo", FILTER_SANITIZE_SPECIAL_CHARS);
        echo "<h2>Tabela ".$linhas."x".$colunas."</h2>";
        echo "<table class='table table-bordered table-striped'>";
        echo "<tbody>";
        for($i = 1; $i <= $linhas; $i++){
          echo "<tr class='table-$estilo'>";
          for($j = 1; $j <= $colunas; $j++){
            echo "<td  class='text-center'>-</td>";
          }
          echo "</tr>";
        }
        echo "</tbody>";      
        echo "</table>";
        echo "<p><a href='./'>Voltar</a></p>";
      ?>
    </div>
</body> 
</html>