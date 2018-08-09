
<?php
  $erro =  isset($_GET['erro']) ? $_GET['erro'] : 0;
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
        <!---___________________________________________________________________________ -->

    <?php include('../_php/_padrao/head.php'); ?>

        <!---___________________________________________________________________________ -->
    </head>
<body>
  <div>
        <!---___________________________________________________________________________ -->

    <?php include('../_php/_padrao/cabecalhologado.php'); ?>

        <!---___________________________________________________________________________ -->


    <div class="row" style="border:0px solid black;height: 150px;"><br></div>
    <div class="row" style="border:0px solid black;"><br><br></div>
    <div class="row" style="border:0px solid black;"><br><br></div>
<div class="row" style="border:0px solid black;margin-bottom: 30px;">
                  <div class="col-lg-2; col-md-2; col-sm-2; col-xs-1" style="border:0px solid black;"></div>
                      <div class="col-lg-6; col-md-6; col-sm-4; col-xs-4" ><span style="border-bottom: 1px solid white; font-size: 40px;text-align: left; margin-top: 5px; padding-top: 10px; padding-bottom:3px; font-family: 'Quicksand', sans-serif; line-height: 35px; color: white;">Meu Perfil</span></div>
                      <div class="col-lg-4; col-md-4; col-sm-4; col-xs-4" style="border:0px solid black;"></div>
</div>
<div class="col-xs-2; col-sm-2; col-md-2; col-lg-2" style="border:0px solid black;"></div>
<div class="col-xs-8; col-sm-8; col-md-8; col-lg-8" style="border:0px solid black; padding-left: 40px; padding-right: 40px;">
    <div align="" style="height: 372px;">
      <form action="_conexao-banco/1.php" method="post">
        <div class="form-group">
          <label for="foto" class="topicofc">Nome:</label><br>
          <input type="text"  class="form-control" name="foto"/><br>
        <br><br>
        <div class="form-group">
        <center><input type="submit" class="btn" name="fbotao" id="botao" value="Cadastrar" style="width: 150px;border-color: #000000; background-color: #000000; color: #FFFFFF; text-shadow: 0 0 0.1em #8F7;"></center>
        </div>
      </form>
    </div>
  </div>
</div> 

        <!---___________________________________________________________________________ -->

<?php include('../_php/_padrao/footer.php'); ?>

        <!---___________________________________________________________________________ -->

</body>
</html>