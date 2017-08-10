function validaEtapaUm() {
	var codProd = document.getElementById('codProd').value;
	var nomeProd = document.getElementById('nomeProd').value;
	var descricaoProd = document.getElementById('descricaoProd').value;
	var categoriaProd = document.getElementById('categoriaProd').value;
	var marcaProd = document.getElementById('marcaProd').value;

	if (codProd.trim() == '' || nomeProd.trim() == '' || descricaoProd.trim() == '' || categoriaProd.trim() == 'Selecione uma categoria' 
		|| marcaProd.trim() == 'Selecione uma marca') {
		alert('Você deve preencher todos os campos antes de prosseguir!');
	}
}

function validaEtapaDois() {
	var fornecedorProd = document.getElementById('fornecedorProd').value;
	var fornecedorPrecoProd = document.getElementById('fornecedorPrecoProd').value;
	var precoProd = document.getElementById('precoProd').value;
	var pesoProd = document.getElementById('pesoProd').value;
	var garantiaProd = document.getElementsByName('garantia');
	var garantiaMarcada = false;

	for (var i = 0; i < garantiaProd.length; i++) {
		if (garantiaProd[i].type === 'radio' && garantiaProd[i].checked) {
			garantiaMarcada = true;
		}			
	}

	if (fornecedorProd.trim() == '' || fornecedorPrecoProd == '' || precoProd == '' || pesoProd == '' 
		|| !garantiaMarcada) {
		alert('Você deve preencher todos os campos antes de prosseguir!');
	}
}

function validaEtapaTres() {
	var localArmazenamento = document.getElementById('localEstoque').value;
	var unidadeProd = document.getElementsByName('unidade');
	var qtdEstoqueProd = document.getElementById('qtdEstoqueProd').value;
	var descontoMaxProd = document.getElementById('descontoMaxProd').value;
	var unidadeMarcada = false;

	for (var i = 0; i < unidadeProd.length; i++) {
		if (unidadeProd[i].type === 'radio' && unidadeProd[i].checked) {
			unidadeMarcada = true;
		}			
	}

	if (localArmazenamento.trim() == 'Selecione um local de estoque' || !unidadeMarcada) {
		alert('Você deve preencher todos os campos antes de prosseguir!');
	}
}