function enviarForm() {

	var nome = document.getElementById('nome').value;
	var cpf = document.getElementById('cpf').value;

	var linha = '<tr>';
	linha += '<td>'+nome+'</td>';
	linha += '<td>'+cpf+'</td>';
	linha += '</tr>';
	tabela.innerHTML += linha;

}