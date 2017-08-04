<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP - Aula 04 - Etapa 3</title>
</head> 
<body>
	<!-- Título da página --> 
	<h2>Cadastro de Aluno - Etapa 3</h2>
	<h3>Preferências do curso</h3>

	<?php 
		// Receber dados dos campos da etapa 1
		$nome		= $_POST['nome'];
		$idade		= $_POST['idade'];
		$cpf		= $_POST['cpf'];
		$genero		= $_POST['genero'];
		$email		= $_POST['email'];

		// Receber dados dos campos da etapa 2 
		$endereco		= $_POST['endereco'];
		$numero			= $_POST['numero'];
		$complemento	= $_POST['complemento'];
		$bairro			= $_POST['bairro'];
		$cidade			= $_POST['cidade'];
		$estado			= $_POST['estado'];
	 ?>

	<!-- Formulário --> 
	<form name="etapa2" action="respostas.php" method="post">
		<!-- Campo de curso -->
		<p>
			<label for="curso">Curso:</label><br>
			<select name="curso">
				<option selected disabled>--Selecione--</option>
				<option value="STI">Sistemas p/ Internet</option>
				<option value="ADS">Análise de Sistemas</option>
			</select>
		</p>
		<!-- Campo de Preferências --> 
		<p>
			<label for="preferencias">Preferências:</label><br>
			<input type="checkbox" id="programacao" name="preferencias[]" value="Programação"><label for="programacao">Programação</label><br>
			<input type="checkbox" id="analise" name="preferencias[]" value="Análise"><label for="analise">Análise</label><br>
			<input type="checkbox" id="banco" name="preferencias[]" value="Banco de dados"><label for="banco">Banco de dados</label><br>
			<input type="checkbox" id="outros" name="preferencias[]" value="Outros"><label for="outros">Outros</label><br>
		</p>
		<!-- Campo de Turno --> 
		<p>
			<label for="turno">Turno:</label>
			<input type="radio" id="manha" name="turno" value="Manhã"><label for="manha">Manhã</label>
			<input type="radio" id="noite" name="turno" value="Noite"><label for="noite">Noite</label>
		</p>
		<!-- Salvamento dos valores da ETAPA 1 em variáveis para envio para próxima página -->		
		<input type="hidden" name="nome" value="<?php echo $nome; ?>">	
		<input type="hidden" name="idade" value="<?php echo $idade; ?>">	
		<input type="hidden" name="cpf" value="<?php echo $cpf; ?>">	
		<input type="hidden" name="genero" value="<?php echo $genero; ?>">	
		<input type="hidden" name="email" value="<?php echo $email; ?>">	
		<!-- Salvamento dos valores da ETAPA 2 em variáveis para envio para próxima página -->		
		<input type="hidden" name="endereco" value="<?php echo $endereco; ?>">	
		<input type="hidden" name="numero" value="<?php echo $numero; ?>">	
		<input type="hidden" name="complemento" value="<?php echo $complemento; ?>">	
		<input type="hidden" name="bairro" value="<?php echo $bairro; ?>">	
		<input type="hidden" name="cidade" value="<?php echo $cidade; ?>">	
		<input type="hidden" name="estado" value="<?php echo $estado; ?>">	
		<!-- Botões para retorno e envio -->
		<p>
			<button type="submit" onclick="history.back();" name="voltar"><< Etapa Anterior</button>
			<button type="submit" name="proxima">Finalizar Cadastro</button>
		</p>
	</form>
</body>
</html>