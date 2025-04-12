<?php
    require_once 'classes/Autenticador.php';
    require_once 'classes/Sessao.php';

    Sessao::iniciar();

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $usuario = Autenticador::login($email, $senha);

    if($usuario) {
        Sessao::set('usuario', $usuario);
        if(isset($_POST['lembrar'])) {
            setcookie('email', $email, time() + 3600, "/");
        }
        header('Location: dashboard.php');
    } else {
        echo "Login inválido";
    }
?>

<br>
<br>
<a href="login.php"><button>Voltar</button></a>