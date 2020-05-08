<?php
require_once("conecta.php");
function listaSetores($conexao){
	$setor = array();
	$query = "select * from setor";
	$resultado = mysqli_query($conexao, $query);
	while($setores = mysqli_fetch_assoc($resultado)){
		array_push($setor, $setores);
	}
	return $setor;
}
?>