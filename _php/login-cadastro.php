<?php
  $erro =  isset($_GET['erro']) ? $_GET['erro'] : 0;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include('../_php/_padrao/head.php'); ?>
</head>
<body>
	<div>
    	 	<!---___________________________________________________________________________ -->

    	 	<?php include('../_php/_padrao/cabecalho.php'); ?>


		<div class="row" style="border:0px solid black;"><br></div>
		<div class="row" style="border:0px solid black;"><br><br></div>
		<div class="row" style="border:0px solid black;"><br><br></div>
    <div class="row" style="border:0px solid black;"><br><br></div>
    <div class="row" style="border:0px solid black;"><br><br></div>

     	<div class="row" style="border:0px solid black;margin-bottom: 0px; height: 91px">

		<div class="col-lg-3; col-md-3; col-sm-2; col-xs-2" style="border:0px solid black;"></div>
      	<div class="col-lg-6; col-md-6; col-sm-4; col-xs-4 login" style="height: 100%;"> <!-- onclick="showlogin()"> -->

        Já possui um Cadastro?

      </div>
      	<div class="col-lg-4; col-md-4; col-sm-4; col-xs-4" style="border:0px solid black;"></div>
        <div class="col-lg-6; col-md-6; col-sm-4; col-xs-4 cadastro" style="height: 100%;"> <!-- onclick="showcadastro()"> -->

        É novo por Aqui?

      </div>
        <div class="col-lg-2; col-md-2; col-sm-2; col-xs-2" style="border:0px solid black;"></div>
        </div>
    <div class="row" style="border:0px solid black;margin-bottom: 30px; height: 275px">
        <div class="col-lg-3; col-md-3; col-sm-3; col-xs-2" style="border:0px solid black;"></div>
        <div class="col-lg-3; col-md-3; col-sm-3; col-xs-2" style="border:0px solid black;"></div>
        <div class="col-lg-6; col-md-6; col-sm-4; col-xs-4 descricao-login"  id="ofertaslogin" style="height: 100%; background-color: rgba(0, 0, 0, 0.7); visibility: visible;">

          <form action="../_php/_conexao-banco/login.php" method="post" name="formlogin">
        <div class="form-group">
          <label for="nome" class="topicofc" style="color:white;">Email:</label><br>
          <input type="email" class="form-control" name="email" id="nome" required>
          <label for="nome" class="topicofc" style="color:white;">Senha:</label><br>
          <input type="password" class="form-control" name="senha" id="senha" required><br>
          <input type="submit" class="btn" name="btnlogin" value="Entrar" style="color: black; width: 150px; margin-bottom: 20px;">&emsp;&ensp;<span style="color:red; font-size: 20px;">
          <strong><?php if($erro == 1){ echo "Usuário ou senha inválidos";} ?></strong>
        </span>
        </div>
        
      </form>

              
        <!-- <span style="font-size: 25px; text-align: right;"> Entre agora mesmo!</span> -->

      </div>
        <div class="col-lg-6; col-md-6; col-sm-4; col-xs-4 descricao-cadastro" id="ofertascadastro" style="height: 100%; margin-top:2px; visibility: visible;">
        <span class="glyphicon glyphicon-stop" aria-hidden="true" style="color:red;"></span>
        Oferecemos conteúdos semanais sobre bitcoin.<br>

        <span class="glyphicon glyphicon-stop" aria-hidden="true" style="color:red;"></span>
        Aba Tira dúvidas<br>

        <span class="glyphicon glyphicon-stop" aria-hidden="true" style="color:red;"></span>
        Compra de bitcoins.<br>
        <br>
       <center><a href="cadastro.php" style="color:white; font-size: 20px;"> Quero me Cadastrar!</a></center>
      </div>
        <div class="col-lg-4; col-md-4; col-sm-4; col-xs-4" style="border:0px solid black; height: 120px;"></div>
        </div>
  <?php include('../_php/_padrao/footer.php'); ?>
</div>
</body>
</html>