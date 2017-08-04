<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>PHP - Aula 04 - Respostas</title>
</head>
<body>
	<a href="index.php">Voltar p/ início do cadastro</a>

	<?php 
		// Receber dados dos campos da ETAPA 1
		$nome			= $_POST['nome'];
		$idade			= $_POST['idade'];
		$cpf			= $_POST['cpf'];
		$genero			= $_POST['genero'];
		$email			= $_POST['email'];

		// Receber dados dos campos da ETAPA 2 
		$endereco		= $_POST['endereco'];
		$numero			= $_POST['numero'];
		$complemento	= $_POST['complemento'];
		$bairro			= $_POST['bairro'];
		$cidade			= $_POST['cidade'];
		$estado			= $_POST['estado'];

		// Receber dados dos campos da ETAPA 3 
		$curso			= $_POST['curso'];
		$preferencias	= $_POST['preferencias'];
		$turno			= $_POST['turno'];

		// Título da página 
		echo "<h2>Aluno Cadastrado</h2>";
		echo "<hr>";
		echo "<u><b>Dados Pessoais</u></b><br>";
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
		echo "<hr>";
	 ?>
	
</body>
</html>