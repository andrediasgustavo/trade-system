<?php 
	require_once("cabecalho.php"); 
	require_once("banco-acoes.php");
	require_once("logica-usuario.php");
?>
<?php

verificaUsuario();


$nome = $_POST["nome"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];
$total = $quantidade * $preco;

if(insereAcao($conexao, $nome, $total, $quantidade)){ ?>
<?php $_SESSION["success"] = "Ação comprada com sucesso";
header("Location: carteira.php");

}else{ 
	$msg = mysqli_error($conexao);
?>
	<p>Não foi possivel realizar a compra. <br> <?= $msg ?></p>
<?php
}
?>


<?php require_once("rodape.php"); ?>