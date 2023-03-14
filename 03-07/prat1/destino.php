<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino</title>

    <style>
        body {
            padding-left: 5%;
            padding-top: 2%;
            font-family: 'Roboto', sans-serif;
        }
        .cores{
            display: flex;
        }
        .azul{
            width: 100px;
            height: 100px;
            background-color: lightblue;
            border: 1px solid black;
            margin-right: 30px;
        }
        .vermelho{
            width: 100px;
            height: 100px;
            background-color: coral;
            border: 1px solid black;
            margin-right: 30px;
        }
        .verde{
            width: 100px;
            height: 100px;
            background-color: lightgreen;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <h1>Destino GET</h1>
    <hr>
    <div>
        <?php
        $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_EMAIL);
        $cor = filter_input(INPUT_GET, "cor", FILTER_SANITIZE_SPECIAL_CHARS);

        $info = "<p> Nome informado é: $nome<br>Email: $email</p>";
        
        if($nome && $email){
            echo $info;
        }
        ?>

        <p>
            
            <a href="destino.php?nome=Matheus&email=matheus%40email.com&cor=<?php echo $cor ?>">[nome = Matheus | email = matheus@email.com]</a> <br>
            <a href="destino.php?nome=Sass&email=sass%40email.com&cor=<?php echo $cor ?>">[nome = Sass | email = sass@email.com]</a> <br>
            <a href="destino.php">Limpar tudo</a>
        </p>
        <div class="cores">
            <a href="destino.php?cor=lightblue<?php echo '&nome=' . $nome . '&email=' . $email ?>">
                <div class="azul"></div>
            </a>
            <a href="destino.php?cor=coral<?php echo '&nome=' . $nome . '&email=' . $email ?>">
                <div class="vermelho"></div>
            </a>
            <a href="destino.php?cor=lightgreen<?php echo '&nome=' . $nome . '&email=' . $email ?>">
                <div class="verde"></div>
            </a>
        </div>
        
        <p>
            <a href="index.php">Voltar ao formulário</a>
        </p>

        <style>
            body {
                background-color: <?php echo $cor; ?>;
            }
        </style>
    </div>
</body>

</html>