<?php
// CONEXAO BANCO //
$host	= "localhost";
$user	= "root";
$senha	= "";
$bd		= "bitcoin";

	$conm	=	mysqli_connect($host, $user, $senha, $bd);
// BUSCANDO DADOS DO FORM //

			$emailSession = $_SESSION['email'];
// ----------------------------------------------------------- // 
	$sql=	( "UPDATE identificacao SET nome = $nomeatualizado WHERE email = $emailSession");
	$query=		mysqli_query($conm, $sql);

	header("location:../meuperfil.php");
?>
