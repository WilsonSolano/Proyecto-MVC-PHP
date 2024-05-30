<?php
    class LoginController
    {
        public function Entrar(){
            $usuario = new usuario();

            //captura todos los datos
            $email = $_REQUEST['email'];
            $Contraseña = $_REQUEST['Contraseña'];

            //Consultar los datos
            $usuario = $this->model->Entrar($email,$Contraseña);
        }
    }
?>