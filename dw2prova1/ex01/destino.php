<?php 
    //session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex1 - Destino</title>    
</head>
<body>
    <?php
    setcookie('cookie_prova', 'valor', time() + 60);
    if(isset($_COOKIE['cookie_prova'])){
        $titulo = filter_input(INPUT_POST, "titulo", FILTER_SANITIZE_SPECIAL_CHARS);
        $corpo = filter_input(INPUT_POST, "corpo", FILTER_SANITIZE_SPECIAL_CHARS);
        $cor_texto = filter_input(INPUT_POST, "cor-texto", FILTER_SANITIZE_SPECIAL_CHARS);
        $url_img = filter_input(INPUT_POST, "url-img", FILTER_SANITIZE_SPECIAL_CHARS);
        $url_ref = filter_input(INPUT_POST, "url-ref", FILTER_SANITIZE_SPECIAL_CHARS);        
        echo "<h1>$titulo</h1>", "<hr>";

        $alinhamento = filter_input(INPUT_POST, "alinhamento", FILTER_SANITIZE_SPECIAL_CHARS);
        
        if($alinhamento == 'centralizado'){
            echo "<style>body{text-align: center;}</style>";
        } elseif($alinhamento == 'direita'){
            echo "<style>body{text-align: right;}</style>";
        }

        $repetir = filter_input(INPUT_POST, "repetir", FILTER_SANITIZE_SPECIAL_CHARS);
        for($i = 0; $i <= $repetir; $i++){
            echo "<p>$corpo</p>";
        }

        $tipo_img = filter_input(INPUT_POST, "tipo-img", FILTER_SANITIZE_SPECIAL_CHARS);
        if($tipo_img == 'corpo'){
            echo "<img src='$url_img' alt='imagem escolhida'>";
        } elseif($tipo_img == 'bg'){
            echo "<style> body {background-image: url('$url_img');}</style>";
        }
    } else{
        echo "Nada aqui.";
        setcookie('cookie_prova', 'valor', time() + 60);
    }
    ?>

    
    <br><br>
    <a href="<?php echo $url_ref;?>"><?php echo $url_ref;?></a>

    <style>
        body {
            color: <?php echo $cor_texto;?>;
        }
    </style>
</body>
</html>