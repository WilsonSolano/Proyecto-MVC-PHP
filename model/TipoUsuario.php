<?php
    class TipoUsuario
    {
        private $pdo;
        public $idtipousuario;
        public $nombre;
        public $descripcion;

        //contructor
        public function __CONSTRUCT()
        {
            try {
                $this->pdo = Conexion::Conectar();
            } catch (\Throwable $th) {
                die($th->getMessage());
            }
        }

        public function ListarTiposUsuarios()
        {
            try 
            {
                $stm = $this->pdo->prepare("SELECT * FROM tiposusuarios");
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_OBJ);    
            } catch (\Throwable $th) {
                die($th->getMessage());
            }
        }

        public function ObtenerTipoUsuario($id)
        {
            try 
            {
                $stm = $this->pdo->prepare("SELECT *FROM tiposusuario WHERE idtipousuario = ?");
                $stm->execute(array($id));
                return $stm->fetch(PDO::FETCH_OBJ);
            } catch (\Throwable $th) {
                die($th->getMessage());
            }
        }
    }
    
?>