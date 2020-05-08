<?php 
session_start();
    require_once("cabecalho.php"); 
    require_once("banco-usuario.php");
    require_once("logica-usuario.php");

if(!usuarioEstaLogado()){
    $_SESSION["muted"] = "Você não está logado";
    header("Location: index.php");
 }
 
?>
<br>
<br>
<br>
<h2>Configurações de conta</h2>
<table class="table table-bordered">
    <tr>
        <td><?= $_SESSION['username'] ?></td>
        <td><?= $_SESSION['useremail'] ?></td>
        <td><a class="btn btn-primary btn-lg" href="altera-perfil-form.php?id=<?=$documento['id']?>">Alterar</a>
        <td>
            <form action="remove-cadastro.php" method="post">
                <input type="hidden" name="id" value="<?=$_SESSION['userid']?>">
                <button class="btn btn-danger btn-lg">Remover Cadastro</button>
            </form>
        </td>
    </tr>

<?php require_once("rodape.php"); ?>

</table>
