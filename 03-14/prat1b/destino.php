<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<?php 
		// Verifica se o formulário foi submetido
	if($_SERVER['REQUEST_METHOD'] === 'POST'){
	
		// Cria um array para armazenar os valores das checkboxes selecionadas
		$checkboxes_selecionadas = array();
		
		// Verifica se o parâmetro 'checkbox' foi enviado no formulário
		if(isset($_POST['checkbox'])){
		
			// Percorre o array de checkboxes e adiciona os valores selecionados ao array $checkboxes_selecionadas
			foreach($_POST['checkbox'] as $checkbox_selecionada){
				array_push($checkboxes_selecionadas, $checkbox_selecionada);
			}
		}
		
		// Exibe os valores das checkboxes selecionadas
		echo "As checkboxes selecionadas são: ";
		foreach($checkboxes_selecionadas as $checkbox_selecionada){
		echo $checkbox_selecionada . " ";
		}
		
	}
		
	?>
</body>
</html>