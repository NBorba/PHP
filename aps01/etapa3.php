<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP - Aula 04 - Etapa 3</title>
	<!-- Referências -->
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Lato:300,400" rel="stylesheet">
	<script type="text/javascript" src="js/validacao.js"></script>
</head> 
<body>
	<!-- Título da página -->
	<h2>Cadastro de Produto <span class="subtitulo">Etapa <b>03</b> de <b>03</b></span></h2>
	<!-- Descrição de campos obrigatórios -->
	<span class="descricao-obrigatorio">Campos obrigatórios estão marcados com <span class="vermelho-salmao">*</span>.</span>
	<hr>

	<?php 
			// Recebe dados dos campos da Etapa 1
			$codProd		= $_POST['codProd'];
			$nomeProd		= $_POST['nomeProd'];
			$descProd		= $_POST['descricaoProd'];
			$categoriaProd	= $_POST['categoriaProd'];
			$marcaProd		= $_POST['marcaProd'];

		// Se todos os campos estão preenchidos
		if (!empty($_POST['fornecedorProd']) &&
			!empty($_POST['fornecedorPrecoProd']) &&
			!empty($_POST['precoProd']) &&
			!empty($_POST['pesoProd']) &&
			!empty($_POST['garantia']) && 
			isset($_POST['proxima'])) {

			// Recebe dados dos campos da Etapa 2
			$fornecedorProd			= $_POST['fornecedorProd'];
			$fornecedorPrecoProd	= $_POST['fornecedorPrecoProd'];
			$precoProd				= $_POST['precoProd'];
			$pesoProd				= $_POST['pesoProd'];
			$garantiaProd			= $_POST['garantia'];
		} else {
			// Volta para a etapa anterior caso algum dos campos não esteja preenchido
			echo '<script type="text/javascript">';
			echo 'history.back()';
			echo '</script>';
		}
	 ?>

	<!-- Formulário --> 
	<form name="etapa2" action="confirmacao.php" method="post">
		<!-- Campo de local de estoque -->
		<p class="zera-margem">
			<label class="titulo-campo" for="localEstoque">Local de armazenamento do produto <span class="vermelho-salmao">*</span></label><br>
			<select id="localEstoque" class="campo-select" name="localEstoque">
				<option selected disabled>Selecione um local de estoque</option>
				<option value="Armazém 01">Armazém 01</option>
				<option value="Armazém 02">Armazém 02</option>
				<option value="Armazém 03">Armazém 03</option>
			</select>
		</p>
		<!-- Campo de unidade --> 
		<p>
			<label class="titulo-campo" for="unidadeProd">Unidade <span class="vermelho-salmao">*</span></label><br>
			<input class="margin-checkbox" type="radio" id="fardo" name="unidade" value="Fardo"><label for="fardo">Fardo (FD)</label><br>
			<input type="radio" id="caixa" name="unidade" value="Caixa"><label for="caixa">Caixa (CX)</label><br>
			<input type="radio" id="metro" name="unidade" value="Metro"><label for="metro">Metro (M)</label><br>
		</p>
		<!-- Campo de quantidade em estoque -->
		<p>
			<label class="titulo-campo" for="qtdEstoqueProd">Quantidade inicial em estoque (Unidade) <span class="vermelho-salmao">*</span></label><br>
			<input class="campo-formulário" id="qtdEstoqueProd" name="qtdEstoqueProd" type="number" value="0" min="0" step="1" max="99999999999">
		</p>
		<!-- Campo de desconto máximo permitido -->
		<p>
			<label class="titulo-campo" for="descontoMaxProd">Desconto máximo permitido (%) <span class="vermelho-salmao">*</span></label><br>
			<input class="campo-formulário" id="descontoMaxProd" name="descontoMaxProd" type="number" value="0" min="0" step="1" max="100">
		</p>
		<!-- Campo de Preferências --> 
		<p>
			<label class="titulo-campo" for="filVenda">Filial de venda <span class="subtitulo-campo vermelho-salmao">(Deixe vazio para indicar 'Nenhuma')</span></label><br>
			<input class="margin-checkbox" type="checkbox" id="filialUm" name="filiaisVenda[]" value="Filial Matriz"><label class="titulo-campo" for="filialUm">Filial Matriz</label><br>
			<input type="checkbox" id="filialDois" name="filiaisVenda[]" value="Filial 2"><label class="titulo-campo" for="filialDois">Filial 2</label><br>
			<input type="checkbox" id="filialTres" name="filiaisVenda[]" value="Filial 3"><label class="titulo-campo" for="filialTres">Filial 3</label><br>
			<input type="checkbox" id="filialQuatro" name="filiaisVenda[]" value="Filial 4"><label class="titulo-campo" for="filialQuatro">Filial 4</label><br>
		</p>
		<!-- Salvamento dos valores em variáveis para envio para próxima página -->		
		<input type="hidden" name="codProd" value="<?php echo $codProd; ?>">	
		<input type="hidden" name="nomeProd" value="<?php echo $nomeProd; ?>">	
		<input type="hidden" name="descricaoProd" value="<?php echo $descricaoProd; ?>">	
		<input type="hidden" name="categoriaProd" value="<?php echo $categoriaProd; ?>">	
		<input type="hidden" name="marcaProd" value="<?php echo $marcaProd; ?>">
		<!-- Salvamento dos valores da ETAPA 2 em variáveis para envio para próxima página -->		
		<input type="hidden" name="fornecedorProd" value="<?php echo $fornecedorProd; ?>">	
		<input type="hidden" name="fornecedorPrecoProd" value="<?php echo $fornecedorPrecoProd; ?>">	
		<input type="hidden" name="precoProd" value="<?php echo $precoProd; ?>">	
		<input type="hidden" name="pesoProd" value="<?php echo $pesoProd; ?>">	
		<input type="hidden" name="garantiaProd" value="<?php echo $garantiaProd; ?>">	
		<!-- Botões para retorno e envio -->
		<p>
			<button class="botao-proximo" type="submit" onclick="history.back();" name="voltar">Etapa Anterior</button>
			<button class="botao-proximo" type="submit" onclick="validaEtapaTres()" name="proxima"><b>Finalizar Cadastro</b></button>
		</p>
	</form>
</body>
</html>