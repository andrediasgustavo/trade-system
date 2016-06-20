<?php
require_once("conecta.php");


function buscaAcoes($conexao, $id){
	$query = "select * from acoes where id = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}


function listaAcoes($conexao){
	$acoes = array();
	$resultado = mysqli_query($conexao, "select * from acoes");

	while($acao = mysqli_fetch_assoc($resultado)){ 
		array_push($acoes, $acao);
	}
	return $acoes;
}

function insereAcao($conexao, $nome, $total, $quantidade){
	$nome = mysqli_real_escape_string($conexao, $nome);
	$query = "insert into carteira_acoes (nome, total_valor, quantidade) values ('{$nome}', {$total}, {$quantidade})";
	$resultadoDaInsercao = mysqli_query($conexao, $query);
	return $resultadoDaInsercao;

}
function removeAcao($conexao, $id){
	$query = "delete from carteira_acoes where id = '{$id}'";
	return mysqli_query($conexao, $query);

}

function listaAcoesCarteira($conexao){
	$acoes = array();
	$resultado = mysqli_query($conexao, "select * from carteira_acoes");

	while($acao = mysqli_fetch_assoc($resultado)){ 
		array_push($acoes, $acao);
	}
	return $acoes;
}

?>

