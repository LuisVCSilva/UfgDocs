<?php 
	require_once("cabecalho.php"); 
	require_once("banco-documento.php");
    require_once("logica-usuario.php");
	
if(!usuarioEstaLogado()){
    $_SESSION["muted"] = "Você não está logado";
    header("Location: index.php");
 }
?>

<table class="table table-bordered"> 


<?php
$documento = listaDocumento($conexao);
foreach ($documento as $documentos) :
?>
	<tr>
        <td><?= $documentos['nome'] ?></td>
        <td><?= $documentos['assunto'] ?></td>
        <td><?= substr($documentos['descricao'], 0, 40) ?></td>
        <td><?= $documentos['setor_nome'] ?></td>
        <div class="mostra">
        <?php 
        if(usuarioEstaLogado()){ ?>
           <td><a class="btn btn-primary btn-lg" href="documento-altera-form.php?id=<?=$documentos['id']?>">Alterar</a>
            <td>
            	<form action="remove-documento.php" method="post">
            		<input type="hidden" name="id" value="<?=$documento['id']?>">
            		<button class="btn btn-danger btn-lg">Remover</button>
            	</form>
            </td>
            <?php }else{ ?>
                <style>.mostra{display='none';}</style>
        <?php }?>
        </div>
    </tr>
<?php
endforeach
?>
<?php require_once("rodape.php"); ?>

</table>