<!DOCTYPE html>
<html lang="pt-br">
  <head>
  	<?php include("head.php") ?>
    </head>
    <body>
    	 <div>
    	 	<!---___________________________________________________________________________ -->

    	 	<?php include("cabecalho.php") ?>


		<div class="row" style="border:0px solid black;"><br></div>
		<div class="row" style="border:0px solid black;"><br><br></div>
		<div class="row" style="border:0px solid black;"><br><br></div>
     	<div class="row" style="border:0px solid black;margin-bottom: 30px;">
		<div class="col-lg-2; col-md-2; col-sm-2; col-xs-1" style="border:0px solid black;"></div>
      	<div class="col-lg-6; col-md-6; col-sm-4; col-xs-4" ><span class="topicofc" style="border-bottom: 1px solid black;">Cadastro</span></div>
      	<div class="col-lg-4; col-md-4; col-sm-4; col-xs-4" style="border:0px solid black;"></div>
        </div>
    </nav>

			<!---___________________________________________________________________________ -->

        <div class="col-xs-2; col-sm-3; col-md-3; col-lg-3" style="border:0px solid black;"></div>
      	<div class="col-xs-4; col-sm-3; col-md-3; col-lg-3" style="border:0px solid black;">
			<form action="../_php/php1.php" method="post">
				<div class="row" style="margin-bottom:10px;border-bottom:1px solid black">
					<div align="center" class="col-lg-12; col-md-12; col-sm-12; col-xs-12; subtopico"> Identificação</div></div>
				<div class="form-group">
					<label for="nome">Nome</label>
					<input type="text" class="form-control" id="nome" name="nome1">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email1">
				</div>
				<div class="form-group">
					<label for="pwd">Password</label>
					<input type="password" class="form-control" id="pwd" name="senha">
				</div>
				<div class="form-group">
					<label for="nome">Sexo</label><br>
					<center><input type="checkbox" class="form-check-input" id="Smasculino" name="sexo">
					<label for="Smasculino">Masculino</label>
					<input type="checkbox" class="form-check-input" id="Sfeminino" name="sexo">
					<label for="Sfeminino">Feminino</label>
				</div>
				<div class="form-group">
					<label for="datanascimento">Data de Nascimento</label>
					<input type="date" class="form-control" id="datanascimento" name="datanascimento1">
					<br>
				</div>
			</form>
			</div>

			<!---___________________________________________________________________________ -->

			<div class="col-xs-4; col-sm-3; col-md-3; col-lg-3" style="margin-left:px;border-top:1px solid black;border:0px solid black;">
			
			<form action="../_php/php1.php" method="post">
				<div class="row" style="border:0px solid black"></div>
				<div class="form-group">
					<div class="row" style="margin-bottom:10px;border-bottom:1px solid black">
					<div align="center" class="col-lg-12; col-md-12; col-sm-12; col-xs-12; subtopico"> O que tem a dizer?</div></div>
					<br><br><br>
					<label for="graurgencia">Grau de Urgência</label><br>
					<input type="range" class="form-control" id="GUrgencia" name="graurgencia" min="1" step="1" max="1000">
				</div>
				<div class="form-group">
					<label for="mensagem">Mensagem</label>
					<textarea class="form-control" rows="5" id="mensagem" name="mensagem1"></textarea>
				</div>
			</form>
			</div>
			</div>

			<!---___________________________________________________________________________ -->

			<div class="row"></div>
			<div class="col-xs-2; col-sm-3; col-md-3; col-lg-3" style="border:0px solid black;"></div>
			<div class="col-xs-4; col-sm-3; col-md-3; col-lg-3" style="border-top:0px solid black;padding-top: 10px;">
				<form action="../_php/php1.php" method="post">
				<br>
				<div class="form-group">
					<div class="row" style="margin-bottom:10px;border-bottom:1px solid black">
					<div align="center" class="col-lg-12; col-md-12; col-sm-12; col-xs-12; subtopico"> Endereço</div></div>
					<label for="logradouro">Logradouro</label>
					<input type="text" class="form-control" id="logradouro" placeholder="Enter Rua" name="logradouro1">
				</div>
				<div class="form-group">
					<label for="numero">Número</label>
					<input type="number" class="form-control" id="numero" placeholder="Enter número" name="numero1">
				</div>
				<div class="form-group">
					<label for="estado">Estado</label><br>
						<center>
						<select class="select" id="estado" name='estado1' >
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
					<input type="text" class="form-control" id="cidade" placeholder="Digite sua Cidade" name="cidade1">
				</div>
			</form>
			</div>
			</div>

			<!---___________________________________________________________________________ -->

			<div class="col-xs-4; col-sm-3; col-md-3; col-lg-3" style="margin-left:0px;border-top:0px solid black;padding-top: 10px;">
				<form action="../_php/php1.php" method="post">
				<br>
				<div class="form-group">
					<div class="row" style="margin-bottom:10px;border-bottom:1px solid black">
					<div align="center" class="col-lg-12; col-md-12; col-sm-12; col-xs-12; subtopico"> Compras</div></div>
					<center><label for="nome">Gostaria de adquirir BitCoin quando dispónível?</label><br></center>
					<center><input type="checkbox" class="form-check-input" id="perguntaS" name="pergunta">
					<label for="perguntaS">Sim</label>
					<input type="checkbox" class="form-check-input" id="perguntaN" name="pergunta">
					<label for="perguntaN">Não</label>
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

			<!---___________________________________________________________________________ -->


			<div class="col-lg-12; col-md-12; col-sm-12; col-xs-12">
					<form action="../_php/php1.php" method="post">
						<center><input type="submite" class="btn btn-default" name="submit" value="Cadastrar" onClick="alerta()">
						<br>
						<br></center>
					</div>
				</form>
			</div>
			<!---___________________________________________________________________________ -->

			<?php include("footer.php") ?>
    </body>
</html>