<?php 
	require_once("cabecalho-dashboard.php"); 
	require_once("banco-acoes.php");
    require_once("logica-usuario.php");
?>

<h2 class="title-dash">Ordens Realizadas</h2>

<table class="lista-carteira table "> 

<?php
$acoes = listaAcoesCarteira($conexao);
foreach ($acoes as $acao) :
?>
<tr>
<form action="venda-acoes.php" method="post">
	<input type="hidden" name="id" value="<?= $acao['id']?>">
    <td class="middle"><input readonly class="form-control" type="text" name="nome" value="<?= $acao['nome']?>"></td>
    <td class="middle"><input readonly class="form-control" type="number" name="preco" value="<?= $acao['total_valor']?>"></td>
    <td class="middle"><?= $acao['quantidade']?></td>
    <td class="middle"><input type="submit" class="btn btn-danger btn-lg" value="Vender"></td>
</form>
</tr>
<?php
endforeach
?>


</table>

<div class="fake-div"></div>
<?php require_once("rodape.php"); ?>