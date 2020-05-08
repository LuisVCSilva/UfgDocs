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
<?php
include("/opt/lampp/htdocs/ufgdocs/Gerenciador/index.html");
?>
