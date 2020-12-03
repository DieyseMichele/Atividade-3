<?php
	$nome = $_POST["nome"];
	$dataNascimento = $_POST["dataNascimento"];
	$anoCursa = $_POST["anoCursa"];
	$periodo = $_POST["periodo"];
	$materias = $_POST["materias"];
	$mat = implode(", ", $materias);
	
	$conexao = new mysqli("localhost","root", "","atividade3");

	$sql = $conexao->prepare("INSERT INTO cadastro (Nome, DataNascimento, AnoCursa, Periodo, MateriaPreferida) VALUES ('$nome','$dataNascimento','$anoCursa','$periodo','$mat')");
		
	$sql->execute();
	mysqli_close(conexao);
	header("location: index.php");
?>