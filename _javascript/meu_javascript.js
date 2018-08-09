function showPreLoader(){
	document.getElementById('element').style = 'visibility: visible;'
}

function hidePreLoader(){
	document.getElementById('element').style = 'visibility: hidden;'
}

function Calcula() {

// pega o campo quantidade
var quantidade = eval(document.form.quantidade.value);

// pega o campo valor_unitario
var valorbitcoin = '28.000'

// multiplica os 2 campos
total = quantidade*valorbitcoin;

// passa o valor para o campo total
document.form.valortotal.value = total;

}

function alerta(){
	/* Identificacao//
	var nome = document.getElementById('nome').value;
	var email = document.getElementById('email').value;
	var senha = document.getElementById('pwd').value;
	var sexoM = document.getElementById('Smasculino').value;
	var sexoF = document.getElementById('Sfeminino').value;
	var datanasc = document.getElementById('datanascimento').data;
	// Endereco //
	var logradouro = document.getElementById('logradouro').value;
	var numero = document.getElementById('numero').value;
	var estado = document.getElementById('estado').value;
	var cidade = document.getElementById('cidade').value;
	/* Mensagem 
	var graurgencia = document.getElementById('graurgencia').value;
	var mensagagem = document.getElementById('mensagem').value;
	 Compra 
	var cor = document.getElementById('cor').value;
	var quantidade = parseInt(document.getElementById('quantidade').value);
	var valorbitcoin = parseInt('28000');*/
	alert('Cadastrado com Sucesso');
}

function handle()
{
var keycode = window.event.keyCode;
if (keycode == 13)
{
document.NomeDoForm.submit();
}
}

function showlogin(){
	document.getElementById('ofertaslogin').style = 'visibility: visible;'
}

function showcadastro(){
	document.getElementById('ofertascadastro').style = 'visibility: visible;'
}
