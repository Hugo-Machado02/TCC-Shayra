<?php
session_start();
include('conexao_BD.php');

if(empty($_POST['alterarSenha'])) {
	header('Location: v_alterar-senha-usuarios.php');
	exit();
}

$alterarSenha = mysqli_real_escape_string($conexao, $_POST['alterarSenha']);
$confirmarSenha = mysqli_real_escape_string($conexao, $_POST['confirmarSenha']);

if($alterarSenha == $confirmarSenha){
    //pesquisa no Banco de Dados
    $alterar = "UPDATE login SET senha = '{$alterarSenha}' WHERE usuario_id = {$_SESSION['usuario_id']};";

    $result = mysqli_query($conexao, $alterar);
    if($result == true){
        echo "Senha Atualizada com Sucesso";
        echo "<a href='P_login.php'><input type='button' value='Voltar'></a>";
    }
    else{
        echo "Erro ao Atualizar a Senha";
    }
} else{
    echo "Erro: Senhas diferentes";
    echo "<a href='P_alterar-senha-usuarios.php'><input type='button' value='Voltar'></a>";
}
?>