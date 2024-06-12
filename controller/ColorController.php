<?php
    require_once 'model/Color.php';

    class ColorController
    {
        public $model;

        public function __CONSTRUCT()
        {
            $this->model = new Color;
        }

        public function Index()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/Color/LeerColor.php';
            require_once 'view/pages/include/footer.php';
        }

        public function ActualizarColor()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/Color/ActualizarColor.php';
            require_once 'view/pages/include/footer.php';
        }

        public function CrearColor()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/Color/CrearColor.php';
            require_once 'view/pages/include/footer.php';
        }

        public function EliminarColor()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/Color/EliminarColor.php';
            require_once 'view/pages/include/footer.php';
        }
        
        public function ActualizarColorDB()
        {
            $idcolor = $_REQUEST["idcolor"];
            $nombre = $_REQUEST["nombreActua"];

            $this->model->ActualizarColor($nombre, $idcolor);

            header('location: ?c='.base64_encode("Color"));
        }

        public function insertar()
        {
            $nombre = $_REQUEST["nombre"];

            $this->model->RegistrarTalla($nombre);

            header('location: ?c='.base64_encode("Talla").'&a='.base64_encode("InsertarTalla"));
        }
    }
?>