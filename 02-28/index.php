<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando 3</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <h1>Formulário</h1>
    <hr>
    <form action="destino.php" method="POST">
        <div class="form-body">
            <div>
                <label for="titulo">Título da página:</label>
                <input type="text" name="titulo" id="titulo">
            </div>
            <div>
                <label for="corpo">Corpo:</label>
                <input type="text" name="corpo" id="corpo">
            </div>
            <div>
                <label for="cor-texto">Cor texto:</label>
                <select name="cor-texto" id="cor-texto">
                    <option value="black">Preto</option>
                    <option value="red">Vermelho</option>
                    <option value="blue">Azul</option>
                </select>
            </div>
            <div>
                <label for="url-img">URL de uma imagem:</label>
                <input type="text" name="url-img" id="url-img">
            </div>
            <div>
                <label for="url-ref">URL de link:</label>
                <input type="text" name="url-ref" id="url-ref">
            </div>
            <div>
                <label for="cor-fundo">Cor de plano de fundo da página:</label>
                <select name="cor-fundo" id="cor-fundo">
                    <option value="white">Branco</option>
                    <option value="lightblue">Azul claro</option>
                    <option value="lightgrey">Cinza claro</option>
                </select>
            </div>
            <div class="botoes">
                <button type="submit" class="botao-enviar">Enviar</button>
                <button type="reset" class="botao-limpar">Limpar</button>
            </div>
        </div>
    </form>
    <a href="../index.html">Voltar ao menu de aulas</a>

</body>
</html>