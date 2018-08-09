<!DOCTYPE html>
<html lang="pt-br">
<head>
        <!---___________________________________________________________________________ -->

  	<?php include('../_php/_padrao/head.php') ?>

        <!---___________________________________________________________________________ -->
    </head>
<body>
	<div>
    	 	<!---___________________________________________________________________________ -->

    <?php include('../_php/_padrao/cabecalho.php') ?>

        <!---___________________________________________________________________________ -->


    <div class="row" style="border:0px solid black;"><br></div>
    <div class="row" style="border:0px solid black;"><br><br></div>
    <div class="row" style="border:0px solid black;"><br><br></div>
<div class="row" style="border:0px solid black;margin-bottom: 30px;">
                  <div class="col-lg-2; col-md-2; col-sm-2; col-xs-1" style="border:0px solid black;"></div>
                      <div class="col-lg-6; col-md-6; col-sm-4; col-xs-4" ><span style="border-bottom: 1px solid white; font-size: 40px;text-align: left; margin-top: 5px; padding-top: 10px; padding-bottom:3px; font-family: 'Quicksand', sans-serif; line-height: 35px; color: white;">Cadastro</span></div>
                      <div class="col-lg-4; col-md-4; col-sm-4; col-xs-4" style="border:0px solid black;"></div>
</div>
<div class="col-xs-2; col-sm-2; col-md-2; col-lg-2" style="border:0px solid black;"></div>
<div class="col-xs-8; col-sm-8; col-md-8; col-lg-8" style="border:0px solid black; padding-left: 40px; padding-right: 40px;">
    <div align="">
    	<form action="../_php/_conexao-banco/grava.php" method="post">
        <div class="form-group">
    		  <label for="nome" class="topicofc">Nome:</label><br>
    		  <input type="text" class="form-control" name="fnome" id="nome"><br>
        </div>
    		<label for="email" class="topicofc">Email:</label><br>
    		<input type="text" class="form-control" name="femail" id="email"><br>
    		<label for="senha" class="topicofc">Senha:</label><br>
    		<input type="password" class="form-control" name="fsenha" id="email"><br>
    		<label for="nome" class="topicofc">Sexo</label><br>
					<center><select class="selectpicker" id="fsexo" name='fsexo' style="border: 0px solid gray;-moz-box-shadow: 7px 7px 7px #b6ebf7;-webkit-box-shadow: 7px 7px 7px #b6ebf7; box-shadow: 1px solid black; border-style: groove; border-radius: 5px; width: 90%; border-radius: 10px; height: 40px; font-size: 20px;text-align: center;">
							<option selected></option>
							<option value="Masculino">Masculino</option>
							<option value="Feminino">Feminino</option>
							<option value="Outro">Outro</option>
							<option value="Não Definido">Não Definido</option>
					</select></center><br>
			<label for="senha" class="topicofc">Data de Nascimento:</label><br>
    		<input type="date" class="form-control" name="fdatanascimento" id="fdatanascimento"><BR>
              
        <br><br>
        <div class="form-group">
    		<center><input type="submit" class="btn" name="fbotao" id="botao" value="Cadastrar" style="width: 150px;border-color: #000000; background-color: #000000; color: #FFFFFF; text-shadow: 0 0 0.1em #8F7;"></center>
        </div>
    	</form>
    </div>
  </div>
</div>
        <!---___________________________________________________________________________ -->

<?php include('../_php/_padrao/footer.php') ?>

        <!---___________________________________________________________________________ -->

</body>
</html>