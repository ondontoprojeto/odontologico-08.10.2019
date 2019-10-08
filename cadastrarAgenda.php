<?php

	include_once 'conexao.php';

	//Cadastramento de Produtos no Estoque
	
	$nome =  $_POST['nome'];
	$nomeconsulta =  $_POST['nomeconsulta'];	
	$dia =  $_POST['dia'];
	$hora =  $_POST['hora'];
	$descricao =  $_POST['descricao'];
	$nomedentista =  $_POST['nomedentista'];

	//$id_pessoa =  $_POST['id_pessoa'];



	

   echo $sql = "INSERT INTO atend VALUES(null, '{$nome}','{$nomeconsulta}','{$dia}','{$hora}','{$descricao}', '{$nomedentista}')"; 

   //echo $sql = "INSERT INTO paciente VALUES(null, '{$nome}',{id_pessoa}')"; 




   

	// $inserir = mysqli_query($con, $sql);

	$msg = (mysqli_query($con, $sql)) ? "Gravado com sucesso" : "Erro ao gravar";

	header("location:msgEstoque.php?msg=".$msg);
?>