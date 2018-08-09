<!DOCTYPE html>
<html lang="pt-br">
<head>
  	<!-- METAS -->
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- LINKS BOOSTRAP -->
  	<link rel="stylesheet" type="text/css"   href="../Trabalho/bootstrap/css/bootstrap.css">
  	<link rel="stylesheet" type="text/css"   href="../Trabalho/bootstrap/css/bootstrap-theme.min.css">
  	<link rel="stylesheet" type="text/css"   href="../Trabalho/bootstrap/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css"   href="../Trabalho/bootstrap/css/bootstrap-theme.css">
  	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  	<link href="../Trabalho/_css/css1.css" type="text/css" rel="stylesheet">
	<!-- FONTES -->
	<link href="https://fonts.googleapis.com/css?family=Anton|Audiowide|Fredoka+One|Lora|Press+Start+2P|Quicksand|Raleway|VT323" rel="stylesheet">
	<!-- ÍCONE -->
	<link rel="icon" href="http://download.seaicons.com/icons/paomedia/small-n-flat/1024/bitcoin-icon.png">
	<!-- SCRIPTS -->
	 <script src="../Trabalho/_javascript/meu_javascript.js"></script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<title> Bitcoin, a revolução de uma nova moeda </title>
    </head>
<body>
	<div>
    	 	<!---___________________________________________________________________________ -->

    	 	<nav class="navbar navbar-inverse navbar-fixed-top navbar-transparente" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.html" class="navbar-brand">
            <span class="img-logo">Bit<span style="color:#ffd700">Coin</span> <span class="flash"> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; |</span></span>
          </a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../Trabalho/index.html">Início</a></li>
	            <li><a href="../Trabalho/especificacoes.html">Especificações</a></li>
	            <li><a href="../Trabalho/fotos.html">Galeria</a></li>
	            <li><a href="../Trabalho/multimidia.html">Multimídia</a></li>
	            <li class="divisor" role="separator"></li>
	            <li><a href="../Trabalho/faleconosco.html">Contato</a></li>
            </ul>
            </div>
        </div>
    </nav>
		<div class="row" style="border:0px solid black;"><br></div>
		<div class="row" style="border:0px solid black;"><br><br></div>
		<div class="row" style="border:0px solid black;"><br><br></div>
     	<div class="row" style="border:0px solid black;margin-bottom: 30px;">
		<div class="col-lg-2; col-md-2; col-sm-2; col-xs-1" style="border:0px solid black;"></div>
      	<div class="col-lg-6; col-md-6; col-sm-4; col-xs-4" ><span class="topicofc" style="border-bottom: 1px solid black;">Cadastro</span></div>
      	<div class="col-lg-4; col-md-4; col-sm-4; col-xs-4" style="border:0px solid black;"></div>
        </div>
    </nav>

    <div>
    	<form action="grava.php" method="post">
    		<label for="nome">Nome:</label><br>
    		<input type="text" name="fnome" id="nome"><br>
    		<label for="email">Email:</label><br>
    		<input type="text" name="femail" id="email"><br>
    		<label for="senha">Senha:</label><br>
    		<input type="password" name="fsenha" id="email"><br>
    		<label for="nome">Sexo</label><br>
					<select class="select" id="fsexo" name='fsexo'>
							<option selected></option>
							<option value="Masculino">Masculino</option>
							<option value="Feminino">Feminino</option>
							<option value="Outro">Outro</option>
							<option value="Não Definido">Não Definido</option>
					</select><br>
			<label for="senha">Data de Nascimento:</label><br>
    		<input type="date" name="fdatanascimento" id="fdatanascimento"><br>
    		<input type="submit" name="fbotao" id="botao">
    	</form>
    </div>

		<!-- __________________________________________________________-->
<!--
		<div class="col-xs-2; col-sm-3; col-md-3; col-lg-3" style="border:0px solid black;"></div>
      	<div class="col-xs-4; col-sm-3; col-md-3; col-lg-3" style="border:0px solid black;">
			<form action="grava.php" method="post">
				<div class="row" style="margin-bottom:10px;border-bottom:1px solid black">
					<div align="center" class="col-lg-12; col-md-12; col-sm-12; col-xs-12; subtopico"> Identificação</div></div>
				<div class="form-group">
					<label for="nome">Nome</label>
					<input type="text" class="form-control" id="nome" name="fnome">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="femail">
				</div>
				<div class="form-group">
					<label for="pwd">Password</label>
					<input type="password" class="form-control" id="pwd" name="fsenha">
				</div>
				<div class="form-group">
					<label for="nome">Sexo</label><br>
					<center><select class="select" id="estado" name='festado'>
							<option selected></option>
							<option value="Masculino">Masculino</option>
							<option value="Feminino">Feminino</option>
							<option value="Outro">Outro</option>
							<option value="Não Definido">Não Definido</option>
						</select></center>
				</div>
				<div class="form-group">
					<label for="datanascimento">Data de Nascimento</label>
					<input type="date" class="form-control" id="datanascimento" name="fdatanascimento">
					<br>
				</div>
			</form>
			</div>

	


			<div class="col-xs-4; col-sm-3; col-md-3; col-lg-3" style="margin-left:px;border-top:1px solid black;border:0px solid black;">
			
			<form action="grava.php" method="post">
				<div class="row" style="border:0px solid black"></div>
				<div class="form-group">
					<div class="row" style="margin-bottom:10px;border-bottom:1px solid black">
					<div align="center" class="col-lg-12; col-md-12; col-sm-12; col-xs-12; subtopico"> O que tem a dizer?</div></div>
					<br><br><br>
					<label for="graurgencia">Grau de Urgência</label><br>
					<input type="range" class="form-control" id="GUrgencia" name="fgraaudeurgencia" min="1" step="1" max="1000">
				</div>
				<div class="form-group">
					<label for="mensagem">Mensagem</label>
					<textarea class="form-control" rows="5" id="mensagem" name="fmensagem"></textarea>
				</div>
			</form>
			</div>
			</div>




			<div class="row"></div>
			<div class="col-xs-2; col-sm-3; col-md-3; col-lg-3" style="border:0px solid black;"></div>
			<div class="col-xs-4; col-sm-3; col-md-3; col-lg-3" style="border-top:0px solid black;padding-top: 10px;">
				<form action="grava.php" method="post">
				<br>
				<div class="form-group">
					<div class="row" style="margin-bottom:10px;border-bottom:1px solid black">
					<div align="center" class="col-lg-12; col-md-12; col-sm-12; col-xs-12; subtopico"> Endereço</div></div>
					<label for="logradouro">Logradouro</label>
					<input type="text" class="form-control" id="logradouro" placeholder="Enter Rua" name="flogradouro">
				</div>
				<div class="form-group">
					<label for="numero">Número</label>
					<input type="number" class="form-control" id="numero" placeholder="Enter número" name="fnumero">
				</div>
				<div class="form-group">
					<label for="estado">Estado</label><br>
						<center>
						<select class="select" id="estado" name='festado' >
							<option selected>Open this select menu</option>
							<option value="AC">Acre</option>
							<option value="AL">Alagoas</option>
							<option value="AP">Amapá</option>
							<option value="AM">Amazonas</option>
							<option value="BA">Bahia</option>
							<option value="CE">Ceará</option>
							<option value="DF">Distrito Federal</option>
							<option value="ES">Espírito Santo</option>
							<option value="GO">Goiás</option>
							<option value="MA">Maranhão</option>
							<option value="MT">Mato Grosso</option>
							<option value="MS">Mato Grosso do Sul</option>
							<option value="MG">Minas Gerais</option>
							<option value="PA">Pará</option>
							<option value="PB">Paraíba</option>
							<option value="PR">Paraná</option>
							<option value="PE">Pernambuco</option>
							<option value="PI">Piauí</option>
							<option value="RJ">Rio de Janeiro</option>
							<option value="RN">Rio Grande do Norte</option>
							<option value="RS">Rio Grande do Sul</option>
							<option value="RO">Rondônia</option>
							<option value="RR">Roraima</option>
							<option value="SC">Santa Catarina</option>
							<option value="SP">São Paulo</option>
							<option value="SE">Sergipe</option>
							<option value="TO">Tocantins</option>
						</select></center>
				</div>
				<div class="form-group">
					<label for="cidade">Cidade</label><br>
					<input type="text" class="form-control" id="cidade" placeholder="Digite sua Cidade" name="fcidade">
				</div>
			</form>
			</div>
			</div>

			



			<div class="col-xs-4; col-sm-3; col-md-3; col-lg-3" style="margin-left:0px;border-top:0px solid black;padding-top: 10px;">
				<form action="grava.php" method="post">
				<br>
				<div class="form-group">
					<div class="row" style="margin-bottom:10px;border-bottom:1px solid black">
					<div align="center" class="col-lg-12; col-md-12; col-sm-12; col-xs-12; subtopico"> Compras</div></div>
					<center><label for="nome">Gostaria de adquirir BitCoin quando dispónível?</label><br></center>
					<center>
						<select class="select" id="estado" name='festado'>
							<option selected> </option>
							<option value="Sim">Sim</option>
							<option value="Não">Não</option>
	
						</select></center>
				</div>
				<div class="form-group">
					<label for="cor"> Cor </label>
					<input type="color" class="form-control" id="cor" name="cor">
				</div>
				<div class="form-group">
					<label for="quantidade">Quantidade</label><br>
						<input type="number" class="form-control" id="quantidade" name="quantidade">
						
				</div>
				<div class="form-group">
					<label for="valortotal">Valor Total</label><br>
					<input type="text" class="form-control" id="valortotal" name="valortotal"> 
				</div>
			</form>
			</div>
			</div>

			




			<div class="col-lg-12; col-md-12; col-sm-12; col-xs-12">
					<form action="grava.php" method="post">
						<center><input type="submite" class="btn btn-default" name="submit" value="Cadastrar" onClick="alerta()">
						<br>
						<br></center>
					</div>
				</form>
			</div>



			<table id="rodape" border="0px solid white">
			  <tr>
			  <td style="border-right:3px solid white;" rowspan="2" width="40%"> <strong>Copyright 2018 By</strong>
			  </td>
			  <td style=" padding-right:5px;"> 
			  	<a href="https://www.instagram.com/paul_4pires/">
				  	 <img src="https://instagram.fpoa17-1.fna.fbcdn.net/vp/08af5eb12d92e08c166076b51562b797/5B67C09D/t51.2885-19/s150x150/27880770_891664030958526_32863345992269824_n.jpg"
				  		style="width: 72px; height:72px;" align="right" class="grow2"> 
			  	</a>
			  </td> 
			  <td rowspan="2" width="20%"> 
			  	<table style="border-left: 3px solid white; padding-left: 10px;">
			   		<tr>
			   			<td style="padding-left: 5px;">
			   				Paulo Pires de Avila <br><a href="https://www.facebook.com/pauloasdf.pires">Facebook</a> | <a href="https://twitter.com/Paulonhopavila"> Twitter</a> 
			   			</td>
					</tr>
				</table>
			</td>
			  <td style=" padding-right:5px;"> 
			  	<a href="https://www.facebook.com/pedro.oliveira.5015">
				  	<img src="https://scontent.fpoa17-1.fna.fbcdn.net/v/t1.0-9/27657105_1544247775683105_4863293229459310972_n.jpg?_nc_cat=0&oh=8df5951c070e75da89b9251fe6b8ba26&oe=5B5EE684" 
			  		style="width: 72px; height:72px;" align="right" class="grow2">
			  	</a>
			  </td> 
			  <td rowspan="2" width="20%">
			   	<table style="border-left: 3px solid white; padding-left: 10px;">
			   		<tr>
			   			<td style="padding-left: 5px;">
						   Pedro Oliveira Filho <br> <a href="https://www.facebook.com/pedro.oliveira.5015">Facebook</a> | <a href="https://instagram.com/pedrones35"> Instagram</a>
					 	</td>
					</tr>
				</table>
			  </td>
			  </tr>
			   </table>
	</form>
</div> -->
</body>
</html>