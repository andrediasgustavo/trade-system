<?php 
require_once("cabecalho.php"); 
require_once("logica-usuario.php");


 if(usuarioEstaLogado()){
 	$_SESSION["danger"] = "Você já está logado";
 	header("Location: dashboard.php");
 	die();
 }
?>

<?php if(usuarioEstaLogado()) {?>
	<p class="mostra-alerta">Você esta logado como <?=usuarioLogado()?>.</p>
	<button id="deslogar" class="btn btn-danger btn-lg"><a href="logout.php">Deslogar</a></button>
<?php }else { ?>
<h2 class="title-cadastro"><i class="fa fa-user"></i>Login</h2>
	<form action="login.php" method="post">
		<table class="table">
			<tr>
				<td>Email</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Senha</td>
				<td><input type="password" name="senha"></td>
			</tr>
			<tr>
				<td><button class="cadastro">Login</button></td>
		</table>
	</form>
<?php }?>

<?php require_once("rodape.php"); ?>