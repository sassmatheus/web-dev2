<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Praticando 1</title>
</head>
<body>
    <h1>Formulário</h1>
    <hr>
    <form action="destino.php" method="GET">
        <div class="form-body">
            <div>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome">
            </div>        
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="cor">Cor:</label>
                <input type="text" name="cor" id="cor">
            </div>
            <div class="botoes">
                <button type="submit" class="botao-enviar">Enviar</button>
                <button type="reset" class="botao-limpar">Limpar</button>
            </div>
        </div>
    </form>
    <p><a href='..'>Voltar aos exercícios.</a></p>
</body>
</html>