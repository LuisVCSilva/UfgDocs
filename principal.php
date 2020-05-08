<?php 
require_once("cabecalho.php"); 
require_once("logica-usuario.php");
?>

<h1>Bem Vindo</h1>

<?php if(usuarioEstaLogado()) {?>
	<p class ="mostra-alerta">Você esta logado como <?=usuarioLogado()?>.</p>
	<button id="deslogar" class="btn btn-danger btn-lg"><a href="logout.php">Deslogar</a></button>
<?php }else { ?>
<html><head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head
    content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="princp.css" rel="stylesheet" type="text/css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media
    queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://
    -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head><body>
		<table class="table tabela">
			<tr>
				<div class="col-md-9">
				<div class="profile-content">Página Inicial</div>
			</tr>
			<tr>
				<div class="col-md-9">
				<div class="profile-content">Últimos Documentos Cadastrados...</div>
			</tr>
		</table>
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual
    files as needed -->
    <script src="js/bootstrap.min.js"></script>
  

</body></html>
<?php }?>
<?php require_once("rodape.php"); ?>