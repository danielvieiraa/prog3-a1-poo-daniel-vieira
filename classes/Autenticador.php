<?php
    require_once 'Usuario.php';
    require_once 'Sessao.php';

    class Autenticador {
        private static $usuarios = [];

        public static function registrar($usuario) {
            Sessao::iniciar();
            if(!isset($_SESSION['usuarios'])){
                $_SESSION['usuarios'] = [];
            }
            $_SESSION['usuarios'][] = $usuario;
        }

        public static function login($email, $senha) {
            Sessao::iniciar();
            if (!isset($_SESSION['usuarios'])) return null;
    
            foreach ($_SESSION['usuarios'] as $usuario) {
                if ($usuario->autenticar($email, $senha)) {
                    return $usuario;
                }
            }
            return null;
        }

        public static function listarUsuarios(){
            return self::$usuarios;
        }
    }
?>