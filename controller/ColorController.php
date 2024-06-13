<?php
    require_once 'model/Color.php';

    class ColorController
    {
        private $model;

        public function __construct()
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
        public function CambiarEstado()
        {
            //captura todos los datos
            $id = base64_decode($_REQUEST['id']);
            $nuevo_estado = base64_decode($_REQUEST['ne']);
    
            //registrar los datos
            $this->model->CambiarEstadoColor($nuevo_estado, $id);
    
            header('location: ?c='.base64_encode("Color"));
        }
        public function ActualizarColorDB()
        {
            $idcolor = $_REQUEST["idcolor"];
            $upNombre = $_REQUEST["upNombre"];

            $this->model->ActualizarColor($upNombre, $idcolor);

            header('location: ?c='.base64_encode("Color"));
        }
    }
?>