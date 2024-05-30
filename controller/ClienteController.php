<?php
    class ClienteController
    {
        public function Index()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/Cliente/LeerCliente.php';
            require_once 'view/pages/include/footer.php';
        }

        public function ActualizarCliente()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/Cliente/ActualizarCliente.php';
            require_once 'view/pages/include/footer.php';
        }

        public function CrearCliente()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/Cliente/CrearCliente.php';
            require_once 'view/pages/include/footer.php';
        }

        public function EliminarCliente()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/Cliente/EliminarCliente.php';
            require_once 'view/pages/include/footer.php';
        }        
    }
?>