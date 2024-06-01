<?php
    class UsuarioController
    {
        public function Index()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/Usuario/leer_usuarios.php';
            require_once 'view/pages/include/footer.php';
        }

        public function insertarUsuario()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/Usuario/insertar_usuario.php';
            require_once 'view/pages/include/footer.php';
        }

        public function actualizarUsuario()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/Usuario/actualizar_usuario.php';
            require_once 'view/pages/include/footer.php';
        }

        public function actualizarClaveUsuario()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/Usuario/actualizarClave_usuario.php';
            require_once 'view/pages/include/footer.php';
        }

        public function actualizarPreguntaUsuario()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/Usuario/actualizarPregunta_usuario.php';
            require_once 'view/pages/include/footer.php';
        }

    }
?>