<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando 2</title>
    <style>
        body {
            padding-left: 5%;
            padding-top: 1%;
            font-family: 'Roboto', sans-serif;
			width: 50%;			
        }
		p{
			text-align: justify;			
		}
		span{
			font-weight: bold;
		}
    </style>
</head>
<body>
    <h1>Praticando 3 - Animais</h1>
    <hr>
    <?php 
	if(isset($_GET['link'])){
		$link = $_GET['link'];
		
		$cachorro = "
						<p>Você escolheu o <span>cachorro!</span></p>
						<img src='imgs/dog-min.png' alt='foto de um cachorro' width='128px'>
						<p>Cachorros são animais de estimação populares em todo o mundo e conhecidos por sua lealdade e companheirismo. Eles são membros da família dos canídeos e possuem um olfato altamente desenvolvido, o que os torna excelentes farejadores e caçadores. Possuem ampla variedade de raças, tamanhos e personalidades, cada um com sua própria história e características distintas.</p>
					";
		$gato = "
					<p>Você escolheu o <span>gato</span>!</p>
					<img src='imgs/cat-min.png' alt='foto de um gato'>
					<p>Gatos são animais de estimação independentes e populares em todo o mundo. Eles são membros da família dos felídeos e são conhecidos por suas habilidades de caça, personalidades únicas e habilidades de auto-limpeza. Gatos são capazes de dormir até 16 horas por dia e geralmente passam um terço de suas vidas dormindo.</p>
				";

		$elefante = "
						<p>Você escolheu o <span>elefante</span>!</p>
						<img src='imgs/elephant-min.png' alt='foto de um elefante'>
						<p>Elefantes são animais majestosos e poderosos, conhecidos por sua inteligência, memória e forte senso de comunidade. Eles possuem trombas flexíveis e sensíveis que contêm cerca de 100.000 músculos, permitindo que eles peguem objetos tão pequenos quanto uma moeda ou levantem árvores inteiras. A gestação de um elefante dura 22 meses, a mais longa de todos os mamíferos terrestres. Elefantes podem dormir em pé ou deitados, mas só dormem por cerca de 4 horas por dia.</p>
					";

		$polvo = "<p>Você escolheu o <span>polvo</span>!</p>
					<img src='imgs/octopus-min.png' alt='foto de um polvo'>
					<p>Os polvos são moluscos marinhos da classe Cephalopoda, da ordem Octopoda (oito pés), possuindo oito braços fortes e com ventosas dispostos à volta da boca. Como o resto dos cefalópodes, o polvo tem um corpo mole, sem esqueleto interno (ao contrário das lulas) nem externo, como o argonauta. Como meios de defesa, o polvo possui a capacidade de largar tinta, de mudar a sua cor (camuflagem, através dos cromatóforos), e autotomia de seus braços.</p>";

		$voltar = "<a href='$_SERVER[PHP_SELF]'>Voltar</a>";
					
		switch($link){
			case "cachorro":
				echo $cachorro;
				echo $voltar;
				break;
			case "gato":
				echo $gato;
				echo $voltar;
				break;
			case "elefante":
				echo $elefante;
				echo $voltar;
				break;
			case "polvo":
				echo $polvo;
				echo $voltar;
				break;
		}
	} else {
		echo "<p>Escolha um animal:</p>";
		echo "<a href='?link=cachorro'><img src='imgs/dog-min.png' alt='foto de um cachorro'></a>";
		echo "<a href='?link=gato'><img src='imgs/cat-min.png' alt='foto de um gato'></a>";
		echo "<a href='?link=elefante'><img src='imgs/elephant-min.png' alt='foto de um elefante'></a>";
		echo "<a href='?link=polvo'><img src='imgs/octopus-min.png' alt='foto de um polvo'></a>";
		echo "<p><a href='../index.html'>Voltar aos exercícios.</a></p>";
	}
		
?>
	
    <br>
</body>
</html>


