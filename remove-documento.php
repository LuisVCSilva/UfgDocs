<?php 
	require_once("cabecalho.php"); 
	require_once("banco-documento.php");
	require_once("logica-usuario.php");

$id = $_POST['id'];

removeDocumento($conexao, $id);

$_SESSION["success"] = "Documento removido com sucesso!";
header("Location: documento-lista.php");
die();
?>


<?php require_once("rodape.php"); ?>