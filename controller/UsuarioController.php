<?php

    require_once 'model/Usuario.php';

    class UsuarioController
    {
        public $model;

        public function __CONSTRUCT()
        {
            $this->model = new Usuario;
        }

        public function Index()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/Usuario/leer_usuarios.php';
            require_once 'view/pages/include/footer.php';
        }

        public function insertarUsuario()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/Usuario/insertar_usuario.php';
            require_once 'view/pages/include/footer.php';
        }

        public function actualizarUsuario()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/Usuario/actualizar_usuario.php';
            require_once 'view/pages/include/footer.php';
        }

        public function actualizarClaveUsuario()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/Usuario/actualizarClave_usuario.php';
            require_once 'view/pages/include/footer.php';
        }

        public function actualizarPreguntaUsuario()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/Usuario/actualizarPregunta_usuario.php';
            require_once 'view/pages/include/footer.php';
        }

        public function insertar()
        {
            $data = (object) array(
                "nombre" => $_REQUEST["nombreusuario"],
                "apellido" => $_REQUEST["apellidousuario"],
                "telefono" => $_REQUEST["telefonousuario"],
                "email" => $_REQUEST["emailusuario"],
                "clave" => $_REQUEST["claveusuario"],
                "idpreguntasecreta" => $_REQUEST["idpreguntasecretausuario"],
                "respuestasecreta" => $_REQUEST["respuestausuario"],
                "idtipousuario" => $_REQUEST["idtipousuario"]
            );

            $this->model->RegistrarUsuario($data);

            header("Location:?c=".base64_encode("Usuario"));
        }

        public function actualizarDatosUsuario()
        {
            $data = (object) array(
                "idusuario" => $_REQUEST["idusuario"],
                "nombre" => $_REQUEST["nombreusuario"],
                "apellido" => $_REQUEST["apellidousuario"],
                "telefono" => $_REQUEST["telefonousuario"],
                "email" => $_REQUEST["emailusuario"],
                "idtipousuario" => $_REQUEST["idtipousuario"]
            );

            $this->model->ActualizarUsuario($data);

            header("Location:?c=".base64_encode("Usuario"));            
        }

        public function CambiarEstado()
        {
            //captura todos los datos
            $id = base64_decode($_REQUEST['id']);
            $nuevo_estado = base64_decode($_REQUEST['ne']);
    
            //registrar los datos
            $this->model->CambiarEstadoUsuario($nuevo_estado, $id);
    
            header('location: ?c='.base64_encode("Usuario"));
        }
    }
?>