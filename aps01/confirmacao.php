<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>PHP - Aula 04 - Respostas</title>
	<!-- Referências -->
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Lato:300,400" rel="stylesheet">
</head>
<body>
	<!--<a href="index.php">Voltar p/ início do cadastro</a>-->

	<?php 
		// Recebe dados dos campos da Etapa 1
		$codProd		= $_POST['codProd'];
		$nomeProd		= $_POST['nomeProd'];
		$descProd		= $_POST['descricaoProd'];
		$categoriaProd	= $_POST['categoriaProd'];
		$marcaProd		= $_POST['marcaProd'];

		// Recebe dados dos campos da Etapa 2
		$fornecedorProd			= $_POST['fornecedorProd'];
		$fornecedorPrecoProd	= $_POST['fornecedorPrecoProd'];
		$precoProd				= $_POST['precoProd'];
		$pesoProd				= $_POST['pesoProd'];
		$garantiaProd			= $_POST['garantiaProd'];

		if (!empty($_POST['localEstoque']) &&
			!empty($_POST['unidade']) &&
			isset($_POST['proxima'])) {
			// Recebe dados dos campos da Etapa 3 
			$localEstoque	= $_POST['localEstoque'];
			$unidadeProd	= $_POST['unidade'];
			$qtdEstoqueProd	= $_POST['qtdEstoqueProd'];
			$descontoMaxProd = $_POST['descontoMaxProd'];
			if (!empty($_POST['filiaisVenda'])) {
				$filiaisVenda = $_POST['filiaisVenda'];
			} else {
				$filiaisVenda = 'Nenhuma filial de venda escolhida';
			}
		} else {
			// Volta para a etapa anterior caso algum dos campos não esteja preenchido
			echo '<script type="text/javascript">';
			echo 'history.back()';
			echo '</script>';
		}

		// Título da página 
		echo "<h2>Cadastro de Produto <span class='subtitulo'>Confirmação dos dados</span></h2>";
		echo "<hr>";
		echo "<p class='subtitulo-confirmacao'>Etapa 1</p>";
		echo "<div class='linha-confirmacaoEtapa'></div>"
		/*echo "<u><b>Dados Pessoais</u></b><br>";
		echo "<b> Nome: </b>" . $nome . "<br>";
		echo "<b> Idade: </b>" . $idade . "<br>";
		echo "<b> CPF: </b>" . $cpf . "<br>";
		echo "<b> Gênero: </b>" . $genero . "<br>";
		echo "<b> E-mail: </b>" . $email . "<br>";
		echo "<hr>";
		echo "<u><b>Endereço</b></u><br>";
		echo "<b> Endereço: </b>" . $endereco . "<br>";
		echo "<b> Número: </b>" . $numero . "<br>";
		echo "<b> Complemento: </b>" . $complemento . "<br>";
		echo "<b> Bairro: </b>" . $bairro . "<br>";
		echo "<b> Cidade: </b>" . $cidade . "<br>";
		echo "<b> Estado (UF): </b>" . $estado . "<br>";
		echo "<hr>";
		echo "<u><b>Preferências do curso</b></u><br>";
		echo "<b> Curso: </b>" . $curso . "<br>";
		//var_dump($preferencias);
		echo "<b>Preferências: </b><br>";
		foreach ($preferencias as $preferencia) {
			echo "- " . $preferencia . "<br>";
		}
		echo "<b> Turno: </b>" . $turno . "<br>";
		echo "<hr>";*/	 ?>
	
</body>
</html>