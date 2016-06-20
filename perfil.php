<?php 
session_start();
    require_once("cabecalho-dashboard.php"); 
    require_once("banco-usuario.php");
    require_once("logica-usuario.php");

if(!usuarioEstaLogado()){
    header("Location: index.php");
 }
 
?>

<h2 class="title-cadastro"><i class="fa fa-user"></i>Minha Conta</h2>
<table class="table-perfil table">
    <tr>
        <td class="middle"><?= $_SESSION['username'] ?></td>
        <td class="middle"><?= $_SESSION['useremail'] ?></td>
        <td class="middle">
            <form action="remove-cadastro.php" method="post">
                <input type="hidden" name="id" value="<?=$_SESSION['userid']?>">
                <button class="btn btn-danger btn-lg">Remover Cadastro</button>
            </form>
        </td>
    </tr>
</table>

<?php require_once("rodape.php"); ?>