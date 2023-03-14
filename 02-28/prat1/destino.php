<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando 3 - Destino</title>
    <link rel="stylesheet" href="destino.css">
    <style>
        *{
            font-family: 'Roboto', sans-serif;  
        }
    </style>
</head>
<body>
    <?php 
        $titulo = filter_input(INPUT_POST, "titulo", FILTER_SANITIZE_SPECIAL_CHARS);
        $corpo = filter_input(INPUT_POST, "corpo", FILTER_SANITIZE_SPECIAL_CHARS);
        $cor_texto = filter_input(INPUT_POST, "cor-texto", FILTER_SANITIZE_SPECIAL_CHARS);
        $url_img = filter_input(INPUT_POST, "url-img", FILTER_SANITIZE_SPECIAL_CHARS);
        $url_ref = filter_input(INPUT_POST, "url-ref", FILTER_SANITIZE_SPECIAL_CHARS);
        $cor_fundo = filter_input(INPUT_POST, "cor-fundo", FILTER_SANITIZE_SPECIAL_CHARS);
        
        echo "<h1>$titulo</h1>", "<hr>", "<p>$corpo</p>";
    ?>

    <img src="<?php echo $url_img;?>" alt="imagem escolhida">
    <br><br>
    <a href="<?php echo $url_ref;?>"><?php echo $url_ref;?></a>

    <style>
        body {
            color: <?php echo $cor_texto;?>;
            background-color: <?php echo $cor_fundo;?>;
        }
    </style>
</body>
</html>