<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Confirmação de cadastro</title>
	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<!-- Referências -->
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Lato:300,400" rel="stylesheet">
	<script type="text/javascript" src="js/validacao.js"></script>
</head>
<body>
	<!--<a href="index.php">Voltar p/ início do cadastro</a>-->

	<?php 
		// Recebe dados dos campos da Etapa 1
		$codProd		= $_POST['codProd'];
		$nomeProd		= $_POST['nomeProd'];
		$descricaoProd	= $_POST['descricaoProd'];
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
			echo 'voltaHistorico(1)';
			echo '</script>';
		}

		// Título da página 
		echo "<h2>Cadastro de Produto <span class='subtitulo'><b>Confirmação dos dados</b></span></h2>";
		echo "<span class='descricao-obrigatorio'>Verifique os dados do novo produto e clique em <span class='vermelho-salmao'>'Confirmar cadastro'</span> para finalizar o cadastro.</span>";
		echo "<hr>";

		// Resumo Etapa 1
		echo "<p class='subtitulo-confirmacao zera-margem'>Etapa 1</p>";
		echo "<div class='linha-confirmacaoEtapa'></div>";
		echo "<span class='titulocampo-confirmacao'>Código do produto: <span class='campo-confirmacao vermelho-salmao'>" . $codProd . "</span></span><br>";
		echo "<span class='titulocampo-confirmacao'>Nome do produto: <span class='campo-confirmacao vermelho-salmao'>" . $nomeProd . "</span></span><br>";
		echo "<span class='titulocampo-confirmacao'>Descrição do produto: <span class='campo-confirmacao vermelho-salmao'>" . $descricaoProd . "</span></span><br>";
		echo "<span class='titulocampo-confirmacao'>Categoria do produto: <span class='campo-confirmacao vermelho-salmao'>" . $categoriaProd . "</span></span><br>";
		echo "<span class='titulocampo-confirmacao'>Marca: <span class='campo-confirmacao vermelho-salmao'>" . $marcaProd . "</span></span><br>";


		// Resumo Etapa 2
		echo "<p class='subtitulo-confirmacao'>Etapa 2</p>";
		echo "<div class='linha-confirmacaoEtapa'></div>";
		echo "<span class='titulocampo-confirmacao'>Fornecedor do produto: <span class='campo-confirmacao vermelho-salmao'>" . $fornecedorProd . "</span></span><br>";
		echo "<span class='titulocampo-confirmacao'>Preço do produto no fornecedor: <span class='campo-confirmacao vermelho-salmao'>R$" . $fornecedorPrecoProd . "</span></span><br>";
		echo "<span class='titulocampo-confirmacao'>Nosso preço do produto: <span class='campo-confirmacao vermelho-salmao'>R$" . $precoProd . "</span></span><br>";
		echo "<span class='titulocampo-confirmacao'>Peso do produto: <span class='campo-confirmacao vermelho-salmao'>" . $pesoProd . "KG</span></span><br>";
		echo "<span class='titulocampo-confirmacao'>Garantia do produto: <span class='campo-confirmacao vermelho-salmao'>" . $garantiaProd . "</span></span><br>";

		// Resumo Etapa 3
		echo "<p class='subtitulo-confirmacao'>Etapa 3</p>";
		echo "<div class='linha-confirmacaoEtapa'></div>";
		echo "<span class='titulocampo-confirmacao'>Local de armazenamento do produto: <span class='campo-confirmacao vermelho-salmao'>" . $localEstoque . "</span></span><br>";
		echo "<span class='titulocampo-confirmacao'>Unidade do produto: <span class='campo-confirmacao vermelho-salmao'>" . $unidadeProd . "</span></span><br>";
		echo "<span class='titulocampo-confirmacao'>Estoque inicial do produto: <span class='campo-confirmacao vermelho-salmao'>" . $qtdEstoqueProd . " " . $unidadeProd . "(s)</span></span><br>";
		echo "<span class='titulocampo-confirmacao'>Desconto máximo permitido: <span class='campo-confirmacao vermelho-salmao'>" . $descontoMaxProd . "%</span></span><br>";

		// Se filial de venda não teve nenhum selecionado, mostra mensagem específica
		// Se não, mostra os dados selecionados
		if ($filiaisVenda == 'Nenhuma filial de venda escolhida') {
			echo "<span class='titulocampo-confirmacao'>Filiais de venda: <span class='campo-confirmacao vermelho-salmao'>" . $filiaisVenda . "</span></span><br>";
		} else {
			echo "<span class='titulocampo-confirmacao'>Filial(is) de venda: </span><br>";
			foreach ($filiaisVenda as $filial) {
				echo "<span class='campoFilial-confirmacao vermelho-salmao'>" . $filial . "</span><br>";
			}
		}
		
		?>

		<p>
		<input class="botao cancelar" type="button" value="Etapa anterior" onclick="voltaHistorico(1);">
		<input class="botao texto-bold" type="button" value="Confirmar cadastro" onclick="redireciona('cadastrado');">
		</p>
</body>
</html>