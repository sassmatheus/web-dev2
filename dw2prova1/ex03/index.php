<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Ex03</title>
    <style>
        .corpo{
            display: flex;
        }
        .acresc{
            color: red;
        }
        .desconto{
            color: green;
        }
        .card-body{
            text-align: center;
        }
    </style>
</head>
<body class="container">
    <h1>Exercício 3 - Cálculo de juros de um valor</h1>
    <hr>
    <form method="GET">
        <div class="corpo">
            <div class="card" style="width: 18rem;">
            <img src="https://images.kabum.com.br/produtos/fotos/416246/smartphone-samsung-galaxy-s23-5g-256gb-8gb-ram-octa-core-camera-tripla-50mp-tela-infinita-de-6-1-verde-sm-s911bzgszto_1675182707_g.jpg" class="card-img-top" alt="galaxy s23">
                <div class="card-body">
                    <h4 class="card-title">Galaxy S23</h4>
                    <h4 class="card-title"><strong>R$ 5.399,00</strong></h4>
                    <p class="card-text">Android 13
                        <br>Snapdragon 8 Gen2
                        <br>8GB/256GB
                    </p>
                    <button type="submit" class="btn btn-primary" name="valor" value="5399">Formas de pagamento</button>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
            <img src="https://imgs.casasbahia.com.br/55054446/1g.jpg?imwidth=500" class="card-img-top" alt="iphone14">
                <div class="card-body">
                    <h4 class="card-title">iPhone 14</h4>
                    <h4 class="card-title"><strong>R$ 6.899,00</strong></h4>
                    <p class="card-text">iOS 16
                        <br>Chip A15 Bionic
                        <br>6GB/256GB
                    </p>
                    <button type="submit" class="btn btn-primary" name="valor" value="6899">Formas de pagamento</button>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
            <img src="https://t.ctcdn.com.br/xrBdGjnhWUlS-2-X6V_fXC1pWqs=/fit-in/400x400/filters:format(webp):fill(transparent):watermark(wm/prd.png,-32p,center,1,none,15)/i666100.png" class="card-img-top" alt="xiaomi 13">
                <div class="card-body">
                    <h4 class="card-title">Xiaomi 13</h4>
                    <h4 class="card-title"><strong>R$ 5.199,00</strong></h4>
                    <p class="card-text">Android 13 MIUI 14
                        <br>Snapdragon 8 Gen2
                        <br>8GB/256GB
                    </p>
                    <button type="submit" class="btn btn-primary" name="valor" value="5199">Formas de pagamento</button>
                </div>
            </div>
        </div>
    </form>
    <?php
        if(isset($_GET['valor'])){
            $valor = $_GET['valor'];
            echo "<br>O preço informado é <strong>R$ " . number_format($valor, 2, ',', '.') . "</strong><br><br>";
            echo "As condições de pagamento são: <br><br>";
            echo "
                <ul>
                <li>à vista: <strong>R$ " . number_format($valor - ($valor*0.05), 2, ',', '.') . " <span class='desconto'>(5% de desconto)</span></strong></li>
                <li>parcelado em 3x: <strong>R$ " . number_format($valor/3, 2, ',', '.') . "</strong> totalizando <strong>R$ " . number_format($valor, 2, ',', '.') . "</strong></li>
                <li>parcelado em 5x: <strong>R$ " . number_format(($valor + ($valor*0.05))/5, 2, ',', '.') . "</strong> totalizando <strong>R$ " . number_format($valor + ($valor*0.05), 2, ',', '.') . " <span class='acresc'>(5% de acréscimo)</span></strong></li>
                <li>parcelado em 12x: <strong>R$ " . number_format(($valor + ($valor*0.10))/12, 2, ',', '.') . "</strong> totalizando <strong>R$ " . number_format($valor + ($valor*0.10), 2, ',', '.') . " <span class='acresc'>(10% de acréscimo)</span></strong></li>
                <li>parcelado em 18x: <strong>R$ " . number_format(($valor + ($valor*0.15))/18, 2, ',', '.') . "</strong> totalizando <strong>R$ " . number_format($valor + ($valor*0.15), 2, ',', '.') . " <span class='acresc'>(15% de acréscimo)</span></strong></li>
                </ul> 
            ";
        }   
    ?>
</body>
</html>