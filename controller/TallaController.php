<?php
    require_once 'model/Talla.php';

    class TallaController
    {
        public $model;

        public function __CONSTRUCT()
        {
            $this->model = new Talla;
        }

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

        public function leerUnaTalla()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/Talla/leerunatalla.php';
            require_once 'view/pages/include/footer.php';
        }

        public function CambiarEstado()
        {
            //captura todos los datos
            $id = base64_decode($_REQUEST['id']);
            $nuevo_estado = base64_decode($_REQUEST['ne']);
    
            //registrar los datos
            $this->model->CambiarEstadoTalla($nuevo_estado, $id);
    
            header('location: ?c='.base64_encode("Talla"));
        }

        public function ActualizarTallaDB()
        {
            $idTalla = $_REQUEST["idtallaActua"];
            $nombre = $_REQUEST["nombreActua"];

            $this->model->ActualizarTalla($nombre, $idTalla);

            header('location: ?c='.base64_encode("Talla"));
        }

        public function insertar()
        {
            $nombre = $_REQUEST["nombre"];

            $this->model->RegistrarTalla($nombre);

            header('location: ?c='.base64_encode("Talla").'&a='.base64_encode("InsertarTalla"));
        }
    }
?>