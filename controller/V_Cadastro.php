<?php
session_start();
include("conexao_BD.php");
$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$usu = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$seh = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$sql = "SELECT count(*) as total from usuario where usuario = '$usu'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);


if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: P_cadastros-de-usuarios.php');
	exit;
}

$sql = "INSERT INTO usuario (nome, usuario, senha, data_cadastro) VALUES ('$nome','$usu', '$seh', NOW())";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();
header('Location: P_cadastros-de-usuarios.php');
	exit;


?>