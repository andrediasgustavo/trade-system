<?php

session_start();
function usuarioEstaLogado(){
	return isset($_SESSION["usuario_logado"]);
}

function verificaUsuario(){
	if(!usuarioEstaLogado()){
		$_SESSION["danger"] = "Você não têm acesso a esta funcionalidade";
	    header("Location: index.php");
	    die();
	}
}

function usuarioLogado(){
	return $_SESSION["usuario_logado"];
}

function logaUsuario($email){
	$_SESSION["usuario_logado"] = $email;
}

function logout(){
	session_destroy();
	session_start();
}
function compraAcao($quantidade, $preco){
	$total = $_SESSION["acoes_compradas"] = $quantidade * $preco;
	return $total;
}
?>