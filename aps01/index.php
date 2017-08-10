<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>APS 01 - Cadastro de produto</title>
	<!-- Referências -->
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Lato:300,400" rel="stylesheet">
	<script type="text/javascript" src="js/validacao.js"></script>
</head>
<body>
	<!-- Título da página -->
	<h2>Cadastro de Produto <span class="subtitulo">Etapa <b>01</b> de <b>03</b></span></h2>
	<!-- Descrição de campos obrigatórios -->
	<span class="descricao-obrigatorio">Campos obrigatórios estão marcados com <span class="vermelho-salmao">*</span>.</span>
	<hr>
	<!-- Formulário -->
	<form name="etapa1" method="post" action="etapa2.php">
		<!-- Campo de código -->
		<p class="zera-margem">
			<label class="titulo-campo" for="codProd">Código do produto <span class="vermelho-salmao">*</span></label><br>
			<input class="campo-formulário" type="text" id="codProd" name="codProd" placeholder="EX: ABC-0000001">
		</p>
		<!-- Campo de nome -->
		<p>
			<label class="titulo-campo" for="nomeProd">Nome do produto <span class="vermelho-salmao">*</span></label><br>
			<input class="campo-formulário" type="text" id="nomeProd" name="nomeProd" placeholder="EX: Pendrive Kingston 8GB">
		</p>
		<!-- Campo de descrição -->
		<p>
			<label class="titulo-campo" for="descricaoProd">Descrição <span class="vermelho-salmao">*</span></label><br>
			<input class="campo-formulário" type="text" id="descricaoProd" name="descricaoProd" placeholder="EX: Cor vermelha">
		</p>
		<!-- Campo de categoria -->
		<p>
			<label class="titulo-campo" for="categoriaProd">Categoria do produto <span class="vermelho-salmao">*</span></label><br>
			<select id="categoriaProd" class= "campo-select" name="categoriaProd">
				<option selected disabled>Selecione uma categoria</option>
				<option value="Alimento">Alimentos</option>
				<option value="Brinquedos e jogos">Brinquedos e jogos</option>
				<option value="Casa">Casa</option>
				<option value="Eletrônico">Eletrônico</option>
			</select>
		</p>
		<!-- Campo de marca -->
		<p>
			<label class="titulo-campo" for="marcaProd">Marca do produto <span class="vermelho-salmao">*</span></label><br>
			<select id="marcaProd" class= "campo-select" name="marcaProd">
				<option selected disabled>Selecione uma marca</option>
				<option value="Cadastro de marca">Cadastrar nova marca (Não funcional) </option>
				<option value="Apple">Apple</option>
				<option value="Microsoft">Microsoft</option>
				<option value="P&G">P&G</option>
				<option value="Nike">Nike</option>
			</select>
		</p>
		<!-- Botão para envio -->
		<p>
			<button class="botao-proximo" type="submit" onClick="validaEtapaUm();" name="proxima">Próxima etapa</button>
		</p>
	</form>
</body>
</html>