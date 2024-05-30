<?php
    class ClienteController
    {
        public function Index()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/Color/LeerColor.php';
            require_once 'view/pages/include/footer.php';
        }

        public function ActualizarColor()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/Cliente/ActualizarColor.php';
            require_once 'view/pages/include/footer.php';
        }

        public function CrearColor()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/Cliente/CrearColor.php';
            require_once 'view/pages/include/footer.php';
        }

        public function EliminarColor()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/Cliente/EliminarColor.php';
            require_once 'view/pages/include/footer.php';
        }        
    }
?>