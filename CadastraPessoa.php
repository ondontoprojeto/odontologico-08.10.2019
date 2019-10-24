<?php

	include_once 'conexao.php';

	$cpf = $_POST['cpf'];
	$rg = $_POST['rg'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$orcamento = $_POST['orcamento'];
	$nascimento = $_POST['nascimento'];
	$telefone = $_POST['telefone'];
	$celular = $_POST['celular'];
	$endereco = $_POST['endereco'];
	$bairro = $_POST['bairro'];
	$cep = $_POST['cep'];
	$cidade = $_POST['cidade'];
	$uf = $_POST['uf'];
	$complemento = $_POST['complemento'];
	$situacaoficha = $_POST['situacaoficha'];


	//Anaminésia
	$doencabase = $_POST['doencabase'];
	$alergia = $_POST['alergia'];
	$medicamentos = $_POST['medicamentos'];
	$cirurgia = $_POST['cirurgia'];
	$internacoes = $_POST['internacoes'];
	$pa = $_POST['pa'];
	$queixaprinc = $_POST['queixaprinc'];
		
	

    $sql = "INSERT INTO paciente VALUES(null,'{$cpf}','{$rg}','{$nome}','{$orcamento}', '{$telefone}', '{$celular}', '{$email}', '{$cep}', '{$endereco}', '{$complemento}', '{$bairro}', '{$nascimento}', '{$cidade}', '{$uf}', '{$situacaoficha}', '{$doencabase}',  '{$alergia}', '{$medicamentos}', '{$cirurgia}',  '{$internacoes}' , '{$pa}', '{$queixaprinc}')";

	$msg = (mysqli_query($con, $sql)) ? "Cadastrado com sucesso" : "Erro ao Cadastrar";

	header("location:msg.php?msg=".$msg);
?>