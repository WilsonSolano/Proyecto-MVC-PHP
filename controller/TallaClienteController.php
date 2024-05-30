<?php
    class TallaClienteController
    {
        public function Index()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/TallaCliente/leer_tallaCliente.php';
            require_once 'view/pages/include/footer.php';
        }

        public function insertar()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/TallaCliente/insertar_tallaCliente.php';
            require_once 'view/pages/include/footer.php';
        }
    }
?>