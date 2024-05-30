<?php
    class Color //inicio clase
    {
        private $pdo;

        public $idcolor;
        public $nombre;
        public $estado;

        public function __CONSTRUCT()
        {
            try {
                $this->pdo = Conexion::Conectar();
            } catch (Throwable $t) {
                die($t -> getMessage());
            }
        }

        public function ResgistrarColor($data)
        {
            try{
                $sql = "INSERT INTO color(nombre) VALUES(?)";
                $this->pdo->prepare($sql)->execute(array($data->nombre));    
            }
            catch(throwable $t){
                die($t->getMessage());
            }
        }

        public function ListarColoresActivos()
        {
            try {
                $stm = $this->pdo->prepare("SELECT idcolor,nombre FROM color WHERE estado = 1");
                $stm->execute();

                return $stm->fetchAll(PDO::FETCH_OBJ);
            } catch (Throwable $t) {
                die($t->getMessage());
            }
        }     
        
        public function ListarColoresInactivos()
        {
            try {
                $stm = $this->pdo->prepare("SELECT idcolor,nombre FROM color WHERE estado = 0");
                $stm->execute();

                return $stm->fetchAll(PDO::FETCH_OBJ);
            } catch (Throwable $t) {
                die($t->getMessage());
            }
        }       

        public function ObtenerColor($id)
        {
            try {
                $stm = $this->pdo->prepare("SELECT idcolor,nombre FROM color WHERE idcolor = ?");
                $stm->execute(array($id));

                return $stm->fetchAll(PDO::FETCH_OBJ);
            } catch (Throwable $t) {
                die($t->getMessage());
            }
        }       

        public function ActualizarColor($data)
        {
            try {
                $sql= "UPDATE color SET nombre=? WHERE idcolor=?";
                $this->pdo->prepare($sql)->execute(array($data->nombre,$data->idcolor));

            } catch (Throwable $t) {
                die($t->getMessage());
            }
        }       

        public function CambiarEstadoColor($nuevo_estado,$id)
        {
            try {
                $sql= "UPDATE color SET estado=? WHERE idcolor=?";
                $this->pdo->prepare($sql)->execute(array($nuevo_estado,$id));
                
            } catch (Throwable $t) {
                die($t->getMessage());
            }
        } 

    }
?>