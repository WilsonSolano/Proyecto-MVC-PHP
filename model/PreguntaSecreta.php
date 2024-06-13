<?php
    class PreguntaSecreta //Inicio clase
    {
        private $pdo; //Para la db
        //atributos
        public $idpreguntasecreta;
        public $nombre;

        //constructor
        public function __CONSTRUCT()
        {
            try {
                $this->pdo = Conexion::Conectar();
            } catch (\Throwable $t) {
                die($t -> getMessage());
            }
        }

        //generar lista de datos
        public function ListarPreguntaSecretas()
        {
            try {
                $stm = $this->pdo->prepare("SELECT * FROM preguntasecreta");
                $stm -> execute();
                return $stm->fetchAll(PDO::FETCH_OBJ);
            } catch (\Throwable $t) {
                die($t->getMessage());
            }
        }

        //buscar un registro por id
        public function ObtenerPreguntaSecreta($id)
        {
            try {
                $stm = $this->pdo->prepare("SELECT * FROM preguntasecreta WHERE idpreguntasecreta = ?");
                $stm -> execute(array($id));

                return $stm -> fetch(PDO::FETCH_OBJ);
            } catch (\Throwable $t) {
                die($t->getMessage());
            }
        }

        //fin clase
    }
?>