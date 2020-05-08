<?php
error_reporting(E_ALL ^ E_NOTICE);
 require_once("mostra-alerta.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>UFGDocs</title>
	<meta charset="UTF-8">
	<link rel="icon" href="favicon.png">
	<link href="css/bootstrap.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="ufgdocs.css" rel="stylesheet" />
</head>
<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="contaniner-fluid">
			<div class="navbar-header"><a href="index.php" class="navbar-brand">UFGDocs</a></div>
		</div>
		<div>
			<ul class="nav navbar-nav">	

				<li class="some"><a href="cadastro-form.php">Homepage</a></li>
				<li><a href="Gerenciador.php">Gerenciar documentos</a></li>
				<li><a href="perfil.php">Configurações</a></li>

			</ul>
		</div>
	</div>
	<div class="container-fluid">
		<div class="principal">

<?php

 mostraAlerta("success");
 mostraAlerta("danger");
 mostraAlerta("muted");

 ?>
