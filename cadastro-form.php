<?php 
require_once("cabecalho.php"); 
require_once("logica-usuario.php");


 if(usuarioEstaLogado()){
 	$_SESSION["danger"] = "Você já está logado";
 	header("Location: index.php");
 	die();
 }
?>

<h2 class="title-cadastro"><i class="fa fa-sign-in"></i>Cadastre-se</h2>
	<form action="cadastro.php" method="post">
		<table class="table">
			<tr>
				<td>Nome</td>
				<td><input type="text" name="nome"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" required name="email"></td>
			</tr>
			<tr>
				<td>Senha</td>
				<td><input type="password" min="5" required name="senha"></td>
			</tr>
			<tr>
				<td><button class="cadastro">Cadastre-se</button></td>
			</tr>
		</table>
	</form>

<?php require_once("rodape.php"); ?>