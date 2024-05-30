<?php
    require_once 'model/Cliente.php';

    class ClienteController
    {
        public $model;

        public function __CONSTRUCT()
        {
            $this->model = new Cliente();
        }

        public function Index()
        {
            require_once 'view/pages/include/header_principal_admin.php';
            require_once 'view/pages/cliente/LeerCliente.php';
            require_once 'view/pages/include/footer.php';
        }
    }

?>