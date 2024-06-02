<?php
    require_once 'model/TallaCliente.php';

    class TallaClienteController
    {
        private $model;

        public function __CONSTRUCT()
        {
            $this->model = new TallaCliente();
        }

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

        public function buscarTallaCliente()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/TallaCliente/buscar_talla.php';
            require_once 'view/pages/include/footer.php';
        }

        public function eliminarTallaCliente()
        {
            if(isset($_REQUEST["idtallaclienteF"]))
            {
                $this->model->idtallacliente = $_REQUEST["idtallaclienteF"];
            }

            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/TallaCliente/eliminar_tallaCliente.php';
            require_once 'view/pages/include/footer.php';
        }
        
        public function insertarTallaCliente()
        {
            if (isset($_REQUEST["idtalla"], $_REQUEST["idcliente"], $_REQUEST["detalle"]))
            {
                $data = (object) array("idtalla" => $_REQUEST["idtalla"],"idcliente" => $_REQUEST["idcliente"],"detalle" => $_REQUEST["detalle"]);
                $this->model->RegistrarTallaCliente($data);

                header('location: ?c='.base64_encode("TallaCliente")."&a=".base64_encode("insertar"));
            }
        }

        public function eliminarTallaClienteDB()
        {
            $this->model->idtallacliente = $_REQUEST["idtallaclienteF"];
            $this->model->EliminarTallaCliente($this->model->idtallacliente);

            header('location: ?c='.base64_encode("TallaCliente"));
        }
    }
?>