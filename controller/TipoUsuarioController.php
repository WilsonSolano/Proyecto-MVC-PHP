<?php
    require_once 'model/TipoUsuario.php';

    class TipoUsuarioController
    {
        public $model; 

        public function __CONSTRUCT()
        {
            $this->model = new TipoUsuario;
        }

        public function Index()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/TipoUsuario/leer_tipoUsuario.php';
            require_once 'view/pages/include/footer.php';
        }

        public function buscarTipoUsuario()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/TipoUsuario/leer_tipoUsuarioUn.php';
            require_once 'view/pages/include/footer.php';
        }        
    }
?>