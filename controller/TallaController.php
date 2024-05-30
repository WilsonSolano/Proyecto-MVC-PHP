<?php
    class TallaController
    {
        public function Index()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/Talla/leer_talla.php';
            require_once 'view/pages/include/footer.php';
        }

        public function ActualizarEstadoTalla()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/Talla/actualizar_estado_talla.php';
            require_once 'view/pages/include/footer.php';
        }

        public function ActualizarTalla()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/Talla/actualizar_talla.php';
            require_once 'view/pages/include/footer.php';
        }

        public function InsertarTalla()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/Talla/insertar_talla.php';
            require_once 'view/pages/include/footer.php';
        }        
    }
?>