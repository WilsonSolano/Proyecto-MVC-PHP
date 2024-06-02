<?php
    class Talla
    {
        private $pdo;
        public $idtalla;
        public $nombre;
        public $estado;
        
        //contructor
        public function __CONSTRUCT()
        {
            try {
                $this->pdo = Conexion::Conectar();
            } catch (\Throwable $th) {
                die($th->getMessage());
            }
        }

        //Registrar una talla
        public function RegistrarTalla($nombreTalla)
        {
            try {
                $sql = "INSERT INTO talla(nombre) VALUES(?)";
                $this->pdo->prepare($sql)->execute(array($nombreTalla));
            } catch (\Throwable $th) {
                die($th->getMessage());
            }
        }

        //Listar Tallas
        public function ListarTallasActivas()
        {
            try {
                $stm = $this->pdo->prepare("SELECT idtalla, nombre FROM talla WHERE estado = 1");
                $stm->execute();

                return $stm->fetchAll(PDO::FETCH_OBJ);
            } catch (\Throwable $th) {
                die($th->getMessage());
            }
        }

        public function ListarTallasInactivas()
        {
            try {
                $stm = $this->pdo->prepare("SELECT idtalla, nombre FROM talla WHERE estado = 0");
                $stm->execute();

                return $stm->fetchAll(PDO::FETCH_OBJ);
            } catch (\Throwable $th) {
                die($th->getMessage());
            }
        }

        //Obtenemos una talla
        public function ObtenerTalla($id){
            try {
                $stm = $this->pdo->prepare("SELECT * FROM talla WHERE idtalla = ?");
                $stm->execute(array($id));
                return $stm->fetch(PDO::FETCH_OBJ);
            } catch (\Throwable $th) {
                die($th->getMessage());
            }
        }

        //Actualizar una talla
        public function ActualizarTalla($nombre, $idtalla)
        {
            try {
                $sql = "UPDATE talla SET nombre = ? WHERE idtalla = ?";

                $this->pdo->prepare($sql)->execute(array($nombre, $idtalla));
            } catch (\Throwable $th) {
                die($th->getMessage());
            }
        }

        //cambiar estado de una talla
        public function CambiarEstadoTalla($nuevo_estado, $id){
            try {
                $sql = "UPDATE talla SET estado = ? WHERE idtalla = ?";
                $this->pdo->prepare($sql)->execute(array($nuevo_estado, $id));
            } catch (\Throwable $th) {
                die($th->getMessage());
            }
        }
    }
    
?>