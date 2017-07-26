<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Aula 250717</title>
</head>
<body>
	<?php 

	// variável
	$nome = "Renan Borba Lucas";
	$idade = 19;

	echo "<b>Meu nome é " . $nome . ", e tenho " . $idade . " anos.</b>";

	$disciplina = "Desenvolvimento de Sistemas com PHP";
	$etapa = 7;

	echo "<p>Estou cursando $disciplina na $etapa etapa de 2017 </p>";	

	echo "<h2>Estrutura Condicional</h2>";

	if ($idade < 18) {
		echo "Sou de menor";
	} else if ($idade < 30) {
		echo "Sou um jovem adulto";
	} else {
		echo "Prefiro não comentar minha idade";
	}

	echo "<h2>Estrutura de Repetição</h2>";

	for ($i = 0; $i <= $idade; $i++) {
		echo "Valor atual do contador: " . $i . "<br/>";
	}

	?>

</body>
</html>