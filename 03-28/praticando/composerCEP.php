<?php

use Claudsonm\CepPromise\CepPromise;
use Claudsonm\CepPromise\Exceptions\CepPromiseException;

require __DIR__ . '/vendor/autoload.php';

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Composer</title>
    <style>
        body {
            margin: 10px;
        }
    </style>
</head>

<body>

    <div class="container">
        <form action="composerCEP.php" method="POST">
            <h1>Exemplo CEP com Composer</h1>
            <div class="form-group">
                <label for="cep">CEP:</label>
                <input name="cep" type="number" id="cep">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-warning">Limpar</button>
            </div>
            <br><br>
        </form>
        
    </div>

<?php

if(isset($_POST['cep'])){
    $cep = $_POST['cep'];

    try {
        $address = CepPromise::fetch($cep);
        echo '<div style="background-color: lightgreen; padding: 10px;  margin-left: 20%; color: black; border: 3px solid darkgreen; border-radius: 7px; width: 60%;">';
        echo "<strong style='font-size: 30px;'> CEP: {$address->zipCode} </strong><br>";
        echo "<strong>Cidade:</strong> {$address->city}<br>";
        echo "<strong>Bairro:</strong> {$address->district}<br>";
        echo "<strong>Estado:</strong> {$address->state}<br>";
        echo "<strong>Rua:</strong> {$address->street}<br>";
        echo '</div>';

    } catch (CepPromiseException $e) {
        echo '<div style="background-color: lightcoral; margin-left: 20%; color: black; border: 3px solid red; width: 60%; border-radius: 7px; padding: 10px;">';
        echo "<strong style='font-size: 30px;'>CEP: {$cep}</strong><br>";
        echo "<strong>Erro:</strong> CEP Inválido<br>";
        echo '</div>';
    }
}
?>
<br>
<p><a href="../index.html">Voltar ao menu de exercícios</a></p>

</body>

</html>