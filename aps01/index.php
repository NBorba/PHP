<!DOCTYPE html>
<html lang="pt-br">
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
			<button class="botao texto-bold" type="submit" onClick="validaEtapaUm();" name="proxima">Próxima etapa</button>
		</p>
	</form>
</body>
</html>