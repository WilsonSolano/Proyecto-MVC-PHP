<?php

    require_once 'model/ColorFavoritoController.php';

    class ColorFavoritoController
    {
        public $model;

        public function __CONSTRUCT()
        {
            $this->model = new ColorFavorito();
        }

        public function Index()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/colorfavorito/mostrar.php';
            require_once 'view/pages/include/footer.php';
        }

        public function Insertar()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/colorfavorito/mostrar.php';
            require_once 'view/pages/include/footer.php';
        }

        public function Eliminar()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/colorfavorito/mostrar.php';
            require_once 'view/pages/include/footer.php';
        }
    }

?>