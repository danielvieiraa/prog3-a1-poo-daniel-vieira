<?php
session_start();

// Se o usuário já estiver logado, redireciona para o dashboard
if (isset($_SESSION['user'])) {
    header("Location: views/dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo ao Sistema</title>
</head>
<body>
    <h1>Bem-vindo ao Sistema de Autenticação</h1>

    <p><a href="login.php"><button>Fazer Login</button></a></p>
    <p><a href="cadastro.php"><button>Cadastrar-se</button></a></p>
</body>
</html>
