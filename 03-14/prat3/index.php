<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números primos</title>
    <style>
        body{
            font-family: arial;
            padding-left: 5%;
            padding-top: 1%;
        }
        div{
            display: flex;
        }
        a{
            margin: 10px 40px 0 0;
        }
        
    </style>
</head>
<body>
    <h1>Praticando 3 - Números primos</h1>
    <hr>
    <?php 

        $nums = [1, 2, 3, 5, 20, 32, 37];
        echo "<div>";
        for($i = 1; $i < sizeof($nums); $i++){
            echo "<a href='?num=$nums[$i]' class='num'>Número $nums[$i]</a>";
        }
        echo "</div>";

        if(isset($_GET['num'])){
            $num = $_GET['num'];
            
            function testePrimo($num) {
                if ($num <= 1) {
                    return false;
                }
                for ($i = 2; $i <= sqrt($num); $i++) {
                    if ($num % $i == 0) {
                        return false;
                    }
                }
                return true;
            }

            if($num % 2 == 0){
                $parImpar = "PAR";
            } else {
                $parImpar = "ÍMPAR";
            }

            $primo = "<p class='result'>O número <span>$num</span> <span>é</span> um número primo. Além disso ele é um número <span>$parImpar</span></p>";
            $naoPrimo = "<p class='result'>O número <span>$num</span> <span>não é</span> um número <span>PRIMO</span>. Além disso ele é um número <span>$parImpar</span></p>";
            
            if(testePrimo($num)){
                $cor = "green";
                echo $primo;
                echo "<style>span{background-color: lightgreen;}</style>";
            } else{
                $cor = "red";
                echo $naoPrimo;
                echo "<style>span{background-color: lightcoral;}</style>";
            }

            echo"<style>
                    span{
                        padding: 10px;
                        border: 2px solid $cor;
                        font-size: 24px;
                    }
                    p{line-height: 50px;}
                    .result{margin: 30px;}
                </style>
                ";
            echo "<p class='voltar'><a href='../index.html'>Voltar ao menu de exercícios</a></p>";
        }
    ?>
</body>
</html>