<?php
require_once("conecta.php");

function insereDocumento($conexao, $nome, $assunto, $descricao, $setor_id, $geral){
	$nome = mysqli_real_escape_string($conexao, $nome);
	$descricao = mysqli_real_escape_string($conexao, $descricao);
	$query = "insert into documento (nome, assunto, descricao, setor_id, geral) values ('{$nome}', {$assunto}, '{$descricao}', {$setor_id}, {$geral})";
	$resultadoDaInsercao = mysqli_query($conexao, $query);
	return $resultadoDaInsercao;

}

function buscaDocumento($conexao, $id){
	$query = "select * from documento where nome LIKE {$nome}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}

function alteraDocumento($conexao, $id, $nome, $assunto, $descricao, $setor_id, $geral){
	 $nome = mysqli_real_escape_string($conexao, $nome);
	 $descricao = mysqli_real_escape_string($conexao, $descricao);
	 $query = "update documento set nome = '{$nome}', assunto = {$assunto}, descricao = '{$descricao}', categoria_id = {$categoria_id}, usado = {$usado} where id = '{$id}'";
	 return mysqli_query($conexao, $query);
}

function removeDocumento($conexao, $id){
	$query = "delete from documento where id = {$id}";
	return mysqli_query($conexao, $query);
}

function listaDocumento($conexao){
	$documentos = array();
	$resultado = mysqli_query($conexao, "select d.*,s.nome as setor_nome from documento as d join setor as s on s.id=d.setor_id");

	while($documentos = mysqli_fetch_assoc($resultado)){ 
		array_push($documento, $documentos);
	}
	return $documento;
}

?>

