<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>APS 01 - Cadastro de produto</title>
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
	<!-- Título da página -->
	<h2>Cadastro de Produto <span class="subtitulo">Etapa <b>02</b> de <b>03</b></span></h2>
	<!-- Descrição de campos obrigatórios -->
	<span class="descricao-obrigatorio">Campos obrigatórios estão marcados com <span class="vermelho-salmao">*</span>.</span>
	<hr>

	<?php 
		// Se todos os campos estão preenchidos
		if (!empty($_POST['codProd']) &&
			!empty($_POST['nomeProd']) &&
			!empty($_POST['descricaoProd']) &&
			!empty($_POST['categoriaProd']) &&
			!empty($_POST['marcaProd']) && 
			isset($_POST['proxima'])) {

			// Recebe dados dos campos da Etapa 1
			$codProd		= $_POST['codProd'];
			$nomeProd		= $_POST['nomeProd'];
			$descricaoProd	= $_POST['descricaoProd'];
			$categoriaProd	= $_POST['categoriaProd'];
			$marcaProd		= $_POST['marcaProd'];
		} else {
			// Volta para a etapa anterior caso algum dos campos não esteja preenchido
			echo '<script type="text/javascript">';
			echo 'voltaHistorico(1)';
			echo '</script>';
		}
	 ?>

	<!-- Formulário --> 
	<form name="etapa2" action="etapa3.php" method="post">
		<!-- Campo de fornecedor -->
		<p class="zera-margem">
			<label class="titulo-campo" for="fornecedorProd">Fornecedor <span class="vermelho-salmao">*</span></label><br>
			<input class="campo-formulário" id="fornecedorProd" name="fornecedorProd" type="text" placeholder="EX: Mercado Livre">
		</p>
		<!-- Campo de preço do fornecedor -->
		<p>
			<label class="titulo-campo" for="fornecedorPrecoProd">Preço de venda do fornecedor (R$) <span class="vermelho-salmao">*</span></label><br>
			<input class="campo-formulário" id="fornecedorPrecoProd" name="fornecedorPrecoProd" type="number" min="0.01" step="0.01" max="99999999999" value="0.01" />
		</p>
		<!-- Campo de preço de venda -->
		<p>
			<label class="titulo-campo" for="precoProd">Seu preço de venda (R$) <span class="vermelho-salmao">*</span></label><br>
			<input class="campo-formulário" id="precoProd" name="precoProd" type="number" min="0.01" step="0.01" max="99999999999" value="0.01" />
		</p>
		<!-- Campo de peso do produto -->
		<p>
			<label class="titulo-campo" for="pesoProd">Peso do produto (KG)<span class="vermelho-salmao">*</span></label><br>
			<input class="campo-formulário" id="pesoProd" name="pesoProd" type="number" min="0.1" step="0.01" max="99999999999" value="0.1"> 
		</p>
		<!-- Campo de garantia --> 
		<p>
			<label class="titulo-campo" for="garantiaProd">Garantia <span class="vermelho-salmao">*</span></label><br>
			<input class="margin-checkbox" type="radio" id="tresMeses" name="garantia" value="3 Meses"><label for="tresMeses">3 Meses</label><br>
			<input type="radio" id="seisMeses" name="garantia" value="6 Meses"><label for="seisMeses">6 Meses</label><br>
			<input type="radio" id="umAno" name="garantia" value="1 ano"><label for="umAno">1 ano</label><br>
			<input type="radio" id="doisAnos" name="garantia" value="2 anos"><label for="doisAnos">2 anos</label><br>
			<input type="radio" id="cincoAnos" name="garantia" value="5 anos"><label for="cincoAnos">5 anos</label>
		</p>
		<!-- Salvamento dos valores em variáveis para envio para próxima página -->		
		<input type="hidden" name="codProd" value="<?php echo $codProd; ?>">	
		<input type="hidden" name="nomeProd" value="<?php echo $nomeProd; ?>">	
		<input type="hidden" name="descricaoProd" value="<?php echo $descricaoProd; ?>">	
		<input type="hidden" name="categoriaProd" value="<?php echo $categoriaProd; ?>">	
		<input type="hidden" name="marcaProd" value="<?php echo $marcaProd; ?>">
		<!-- Botões para retorno e envio -->
		<p>
			<button class="botao cancelar" type="submit" onclick="voltaHistorico(1)" name="voltar">Etapa Anterior</button>
			<button class="botao texto-bold"  type="submit" onclick="validaEtapaDois();" name="proxima">Próxima etapa</button>
		</p>
	</form>
</body>
</html>