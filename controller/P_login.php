<?php
//Tela de Login
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../view/TeladeLogin.css">
    <title>Login</title>
</head>
<body>
    <div class="login">
        <h2>Login</h2>
        <form method="post" action="V_login.php">
            <div class="principal">
                <input type="text" name="usuario" required="" autocomplete="off">
                <label>Login</label>
            </div>

            <div class="principal">
                <input type="password" name="senha" required="" autocomplete="off">
                <label>Senha</label>
            </div>

            <?php
            if(isset($_SESSION["nao_autenticado"])):
            ?>

            <div class="noti">
                <p> ERRO: Usuário ou senha inválido. </p>
            </div>

            <?php
            endif;
            unset($_SESSION["nao_autenticado"]);
            ?>

			<div>
				<a href="P_cadastros-de-usuarios.php" class="btn-outline-light">Cadastro</a>
				<button type="submit" class="btn-personalizado">Entrar</button>
			</div>
        </form>
</body>
</html>