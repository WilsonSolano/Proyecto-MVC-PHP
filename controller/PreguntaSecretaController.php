<?php
    class ClienteController
    {
        public function Index()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/PreguntaSecreta/LeerPreguntaSecreta.php';
            require_once 'view/pages/include/footer.php';
        }

        public function ActualizarPreguntaSecreta()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/PreguntaSecreta/ActualizarPreguntaSecreta.php';
            require_once 'view/pages/include/footer.php';
        }

        public function CrearPreguntaSecreta()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/PreguntaSecreta/CrearPreguntaSecreta.php';
            require_once 'view/pages/include/footer.php';
        }

        public function EliminarPreguntaSecreta()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/PreguntaSecreta/EliminarPreguntaSecreta.php';
            require_once 'view/pages/include/footer.php';
        }        
    }
?>