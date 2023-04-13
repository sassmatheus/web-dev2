<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <h1>Exercício 1 - Gerador de páginas 2.0</h1>
    <hr>
    <form action="destino.php" method="POST">
        <div class="form-body">
            <div>
                <label for="titulo">Título da página:</label>
                <input type="text" name="titulo" id="titulo">
                <select name="alinhamento" id="alinhamento" class="opts" required>
                    <option value="" disabled selected>Alinhamento</option>
                    <option value="centralizado">Centralizado</option>
                    <option value="esquerda">Esquerda</option>
                    <option value="direita">Direita</option>
                </select>
            </div>
            <div>
                <label for="corpo">Corpo:</label>
                <textarea name="corpo" id="corpo" cols="80" rows="5"></textarea>
                <select name="repetir" id="repetir" class="opts" required>
                    <option value="" disabled selected>Repetir</option>
                    <option value="0">Não repetir</option>
                    <option value="1">Repetir 1 vez</option>
                    <option value="2">Repetir 2 vezes</option>
                    <option value="3">Repetir 3 vezes</option>
                    <option value="4">Repetir 4 vezes</option>
                    <option value="5">Repetir 5 vezes</option>
                    <option value="6">Repetir 6 vezes</option>
                    <option value="7">Repetir 7 vezes</option>
                    <option value="8">Repetir 8 vezes</option>
                    <option value="9">Repetir 9 vezes</option>
                    <option value="10">Repetir 10 vezes</option>
                </select>
            </div>
            <div>
                <label for="url-img">Imagem:</label>
                <input type="text" name="url-img" id="url-img">
                <select name="tipo-img" id="tipo-img" required class="opts">
                    <option value="" selected disabled>Mostrar imagem</option>
                    <option value="corpo">No corpo da página</option>
                    <option value="bg">No fundo da página (background)</option>
                </select>
            </div>
            <div>
                <label for="cor-texto" >Cor texto:</label>
                <select name="cor-texto" id="cor-texto" class="opts">
                    <option value="black">Preto</option>
                    <option value="red">Vermelho</option>
                    <option value="blue">Azul</option>
                </select>
                <label for="url-ref" class="fonte">Fonte:</label>
                <input type="text" name="url-ref" id="url-ref">
                
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