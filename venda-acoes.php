<?php 
	require_once("cabecalho.php"); 
	require_once("banco-acoes.php");
	require_once("logica-usuario.php");
?>
<?php

verificaUsuario();


$id = $_POST["id"];

if(removeAcao($conexao, $id)){ ?>
<?php $_SESSION["success"] = "Ação vendida com sucesso";
header("Location: carteira.php");

}else{ 
	$msg = mysqli_error($conexao);
?>
	<p>Não foi possivel realizar a Venda. <br> <?= $msg ?></p>
<?php
}
?>


<?php require_once("rodape.php"); ?>