<?php
error_reporting(E_ALL ^ E_NOTICE);
 require_once("mostra-alerta.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Trade System</title>
	<meta charset="UTF-8">
	<link rel="icon" href="image/favicon.png">
	<link href="css/bootstrap.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href="css/loja.css" rel="stylesheet" />
</head>
<body>
	<div class="menu-padrao">
		<h1 class="logo"><a href="index.php">Trade System</a></h1>
		<ul>
			<li><a href="dashboard.php">Comprar Ações</a></li>
			<li><a href="carteira.php">Carteira</a></li>
			<li><a href="perfil.php">Conta</a></li>
			<li><a href="logout.php">Sair</a></li>
		</ul>
	</div>

	<div class="principal">

<?php

 mostraAlerta("success");
 mostraAlerta("danger");
 mostraAlerta("muted");

 ?>