<?php 
require_once("cabecalho.php"); 
require_once("banco-setor.php");
require_once("banco-documento.php");

$id = $_GET['id'];
$documento = buscaDocumento($conexao, $id);

$setor = listaSetores($conexao);

?>
	<h1>Alterando Documento</h1>
	<form action="altera-documento.php" method="post">
        <input type="hidden" name="id" value="<?=$documento['id']?>">
		<table class="table">

           <?php require_once("documento-formulario-base.php"); ?>

            <tr>
                <td><button class="btn btn-primary btn-lg" type="submit">Alterar</button></td>
            </tr>

        </table>

	</form>
<?php require_once("rodape.php"); ?>