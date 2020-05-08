<?php 
	require_once("cabecalho.php"); 
	require_once("banco-documento.php");
?>

<?php

$id = $_POST['id'];
$nome = $_POST["nome"];
$preco = $_POST["assunto"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST['setor_id'];
if(array_key_exists('geral', $_POST))
	$geral = "true";
else{
	$geral = "false";
}
if(alteraDocumento($conexao, $id, $nome, $assunto, $descricao, $setor_id, $geral)){ ?>
	<p>Documento <?= $nome; ?>, <?= $assunto; ?> foi alterado com sucesso.</p>
<?php 
}else{ 
	$msg = mysqli_error($conexao);
?>
	<p>Documento <?= $nome; ?>, não foi alterado: <?= $msg ?></p>
<?php
}
?>


<?php require_once("rodape.php"); ?>