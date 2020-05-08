<?php 
session_start();
	require_once("cabecalho.php"); 
	require_once("banco-documento.php");
	require_once("logica-usuario.php");
if(!usuarioEstaLogado()){
$_SESSION["muted"] = "Você não está logado";
header("Location: index.php");
 }
 
?>
<?php

verificaUsuario();


$nome = $_POST["nome"];
$assunto = $_POST["assunto"];
$descricao = $_POST["descricao"];
$setor_id = $_POST['setor_id'];
if(array_key_exists('geral', $_POST))
	$geral = "true";
else{
	$geral = "false";
}
if(insereDocumento($conexao, $nome, $assunto, $descricao, $setor_id, $geral)){ ?>
<p>Documento <?= $nome; ?>, <?= $assunto; ?> adicionado com êxito.</p>
<?php 
}else{ 
	$msg = mysqli_error($conexao);
?>
	<p>Documento <?= $nome; ?>, não foi adicionado com êxito: <?= $msg ?></p>
<?php
}
?>

<?php require_once("rodape.php"); ?>