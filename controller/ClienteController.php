<?php
    class ClienteController
    {
        public function Index()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/Cliente/LeerCliente.php';
            require_once 'view/pages/include/footer.php';
        }

        public function LeerUnCliente(){
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/Cliente/LeerunCliente.php';
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
        
        public function insertar()
        {
            $data = (object) array(
                "idusuario" => $_REQUEST["idcliente"],
                "nombre" => $_REQUEST["nombrecliente"],
                "apellido" => $_REQUEST["apellidocliente"],
                "telefono" => $_REQUEST["telefonocliente"],
                "email" => $_REQUEST["emailcliente"],
                "sexo"=> $_REQUEST["sexocliente"],
                "fechanacimiento"=>$_REQUEST["fechanacimientocliente"],
                "idtipousuario" => $_REQUEST["idtipousuario"]
            );

            $this->model->RegistrarUsuario($data);

            header("Location:?c=".base64_encode("Cliente"));
        }

        public function actualizarDatosUsuario()
        {
            $data = (object) array(
                "idusuario" => $_REQUEST["idcliente"],
                "nombre" => $_REQUEST["nombrecliente"],
                "apellido" => $_REQUEST["apellidocliente"],
                "telefono" => $_REQUEST["telefonocliente"],
                "email" => $_REQUEST["emailcliente"],
                "sexo"=> $_REQUEST["sexocliente"],
                "fechanacimiento"=>$_REQUEST["fechanacimientocliente"],
                "idtipousuario" => $_REQUEST["idtipousuario"]
            );

            $this->model->ActualizarCliente($data);

            header("Location:?c=".base64_encode("Cliente"));            
        }

        public function CambiarEstado()
        {
            //captura todos los datos
            $id = base64_decode($_REQUEST['id']);
            $nuevo_estado = base64_decode($_REQUEST['ne']);
    
            //registrar los datos
            $this->model->CambiarEstadoCliente($nuevo_estado, $id);
    
            header('location: ?c='.base64_encode("Cliente"));
        }

    }
?>