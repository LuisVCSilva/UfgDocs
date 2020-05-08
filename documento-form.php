<?php 
session_start();
require_once("cabecalho.php"); 
require_once("banco-setor.php");
require_once("logica-usuario.php");
if(!usuarioEstaLogado()){
    $_SESSION["muted"] = "Você não está logado";
    header("Location: index.php");
 }


verificaUsuario();

$documento = array("nome" => "", "assunto" => "", "setor_id" => "1");
$geral = "";
$setor = listaSetores($conexao);

?>
	<h1>UFGDocs</h1>
	<h2>Formulário de Cadastro</h2>
	<form action="adiciona-documento.php" method="post">
		<table class="table">
        
            <?php require_once("documento-formulario-base.php"); ?>
            <tr>
                <td><button class="btn btn-primary btn-lg" type="submit">Cadastrar</button></td>
            </tr>

        </table>

	</form>
<?php require_once("rodape.php"); ?>