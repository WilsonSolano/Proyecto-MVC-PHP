<?php
    //para usar los métodos del modelo usuario
    require_once 'model/Usuario.php';

    class LoginController{
    
        private $model;
        
        public function __CONSTRUCT(){
            //inicializa el modelo
            $this->model = new Usuario();
        }
            
        public function Index(){
            
            //llama la vista login
            require_once 'view/pages/include/header_login.php';
            require_once 'view/login.php';
            require_once 'view/pages/include/footer.php'; 
            
        }
    
        public function Entrar(){
            $usuario = new Usuario();
            
            //captura todos los datos
            $email = $_REQUEST['email'];
            $clave = $_REQUEST['clave'];
    
            //consultar los datos
            $usuario = $this->model->Entrar($email, $clave);
    
            //iniciar la sesión o retornar al login
            $this->model->GenerarSesion($usuario);              
           
        } 
       
    }


?>