<?php
    require_once 'model/PreguntaSecreta.php';
    class PreguntaSecretaController
    {
        public $model;
        public function __construct()
        {
            $this -> model = new PreguntaSecreta;
        }
        public function Index()
        {
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/PreguntaSecreta/LeerPreguntaSecreta.php';
            require_once 'view/pages/include/footer.php';
        }
        public function buscarPreguntaS(){
            require_once 'view/pages/include/header_principal.php';
            require_once 'view/pages/PreguntaSecreta/LeerPreguntaSecretaUn.php';
            require_once 'view/pages/include/footer.php';
        }
    }
?>