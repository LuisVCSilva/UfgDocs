<?php 
require_once("banco-usuario.php");
require_once("logica-usuario.php");
?>
<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

if($nome == "" || $email == "" || $senha == ""){
	$_SESSION["danger"] = "Prencha todos os campos.";
	header("Location: cadastro-form.php");
}else{
	cadastraUsuario($conexao, $nome, $email, $senha);
	$_SESSION["success"] = "Usuario registrado com sucesso.";
	header("Location: index.php");
}
die();
?>

