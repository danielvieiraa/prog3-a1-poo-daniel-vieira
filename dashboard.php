<?php
    require_once 'classes/Usuario.php';
    require_once 'classes/Sessao.php';

    Sessao::iniciar();
    $usuario = Sessao::get('usuario');

    if(!$usuario){
        header('Location: login.php');
        exit;
    }

    echo "Bem-vindo, " . $usuario->getNome() . "!<br>";

    if(isset($_COOKIE['email'])) {
        echo "Seu email armazenado: " . $_COOKIE['email'] . "!<br>";
    }
?>

<br>
<a href="logout.php"><button>Logout</button></a>