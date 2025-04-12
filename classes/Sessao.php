<?php
    class Sessao {
        public static function iniciar() {
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            } 
        }

        public static function set($chave, $valor) {
            $_SESSION[$chave] = $valor;
        }

        public static function get($chave) {
            return $_SESSION[$chave] ?? null;
        }

        public static function destruir() {
            session_start();

            $usuarios = $_SESSION['usuarios'] ?? [];

            session_unset();
            session_destroy();

            session_start();
            $_SESSION['usuarios'] = $usuarios;
        }
    }
?>