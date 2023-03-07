<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Formulário</title>
    <style>
        body {
            padding-left: 5%;
            padding-top: 2%;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Formulário</h1>
    <form action="destino.php" method="GET">
        <div class="row">
            <div class="col-3 my-2">
                <label for="name">Nome</label>
                <input type="text" id="nome" name="nome" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3 my-2">
                <label for="mail">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="email@email.com">
            </div>
        </div>
        <div class="row">
            <div class="col-3 my-2">
                <label for="cor">Cor</label>
                <input type="text" id="cor" name="cor" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3 my-3">
                <input type="submit" class="btn btn-primary" value="Enviar">
                <input type="submit" class="btn btn-warning" value="Limpar">
            </div>
        </div>
    </form>
</body>
</html>