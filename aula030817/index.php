<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>PHP - Aula 04 - Home</title>
</head>
<body>
	<!-- Título da página -->
	<h2>Cadastro de Aluno</h2>
	<!-- Formulário -->
	<form name="etapa1" method="post" action="etapa2.php">
		<!-- Título do formulário -->
		<h3>Dados Pessoais</h3>
		<!-- Campo de nome -->
		<p>
			<label for="nome">Nome: </label><br>
			<input type="text" id="nome" name="nome">
		</p>
		<!-- Campo de nome -->
		<p>
			<label for="idade">Idade: </label><br>
			<input type="number" id="idade" name="idade">
		</p>
		<!-- Campo de CPF -->
		<p>
			<label for="cpf">CPF: </label><br>
			<input type="text" id="cpf" name="cpf">
		</p>
		<!-- Campo de Gênero -->
		<p>
			<label for="cpf">Gênero: </label><br>
			<input type="radio" id="genMasc" name="genero" value="Masculino"><label for="genMasc">Masculino</label>
			<input type="radio" id="genFem" name="genero" value="Feminino"><label for="genFem">Feminino</label>
			<input type="radio" id="genOut" name="genero" value="Outro"><label for="genOut">Outro</label>
		</p>
		<!-- Campo de E-mail -->
		<p>
			<label for="email">E-mail: </label><br>
			<input type="email" id="email" name="email">
		</p>
		<!-- Botão para envio -->
		<p>
			<button type="submit" name="proxima">Próxima Etapa >></button>
		</p>
	</form>
</body>
</html>