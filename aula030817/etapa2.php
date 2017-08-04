<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP - Aula 04 - Etapa 2</title>
</head> 
<body>
	<!-- Título da página --> 
	<h2>Cadastro de Aluno - Etapa 2</h2>
	<h3>Endereço</h3>

	<?php 
		// Receber dados dos campos da etapa 1
		$nome	= $_POST['nome'];
		$idade	= $_POST['idade'];
		$cpf	= $_POST['cpf'];
		$genero	= $_POST['genero'];
		$email	= $_POST['email'];
	 ?>

	<!-- Formulário --> 
	<form name="etapa2" action="etapa3.php" method="post">
		<!-- Campo de endereço -->
		<p>
			<label for="endereco">Endereço: </label><br>
			<input id="endereco" name="endereco" type="text">
		</p>
		<!-- Campo de numero -->
		<p>
			<label for="numero">Número: </label><br>
			<input id="numero" name="numero" type="number">
		</p>
		<!-- Campo de complemento -->
		<p>
			<label for="complemento">Complemento: </label><br>
			<input id="complemento" name="complemento" type="text">
		</p>
		<!-- Campo de bairro -->
		<p>
			<label for="bairro">Bairro: </label><br>
			<input id="bairro" name="bairro" type="text">
		</p>
		<!-- Campo de cidade -->
		<p>
			<label for="cidade">Cidade: </label><br>
			<input id="cidade" name="cidade" type="text">
		</p>
		<!-- Campo de estado -->
		<p>
			<label for="estado">Estado: </label><br>
			<select name="estado">
				<option selected disabled>Selecione:</option>
				<option value="PR">Paraná</option>
				<option value="SC">Santa Catarina</option>
				<option value="RS">Rio Grande do Sul</option>
			</select>
		</p>
		<!-- Salvamento dos valores em variáveis para envio para próxima página -->		
		<input type="hidden" name="nome" value="<?php echo $nome; ?>">	
		<input type="hidden" name="idade" value="<?php echo $idade; ?>">	
		<input type="hidden" name="cpf" value="<?php echo $cpf; ?>">	
		<input type="hidden" name="genero" value="<?php echo $genero; ?>">	
		<input type="hidden" name="email" value="<?php echo $email; ?>">	
		<!-- Botões para retorno e envio -->
		<p>
			<button type="submit" onclick="history.back();" name="voltar"><< Etapa Anterior</button>
			<button type="submit" name="proxima">Próxima Etapa >></button>
		</p>
	</form>
</body>
</html>