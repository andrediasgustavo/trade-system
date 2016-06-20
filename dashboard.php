<?php 
    require_once("cabecalho-dashboard.php"); 
    require_once("banco-acoes.php");
    require_once("logica-usuario.php");
?>
<h2 class="title-dash">Ações Disponiveis </h2>
<table class="table"> 

<?php
$acoes = listaAcoes($conexao);
foreach ($acoes as $acao) :
?>
    <tr>
    <form  action="compra-acoes.php" method="post">
        <td class="middle"><input readonly class="form-control" type="text" name="nome" value="<?= $acao['nome']?>"></td>
        <td class="middle"><input readonly class="form-control" type="number" name="preco" value="<?= $acao['preco']?>"></td>
        <td class="middle"><input class="form-control" type="number" min="1" name="quantidade"></td>
        <td class="middle"><input type="submit" class="btn btn-primary btn-lg" value="Comprar"></td>
    </form>
    </tr>
<?php
endforeach
?>


</table>
<?php require_once("rodape.php"); ?>