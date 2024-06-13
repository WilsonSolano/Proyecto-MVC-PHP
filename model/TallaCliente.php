<?php
    class TallaCliente
    {
        private $pdo;
        public $idtallacliente;
        public $idtalla;
        public $idcliente;
        public $detalle;

        //contructor
        public function __CONSTRUCT()
        {
            try {
                $this->pdo = Conexion::Conectar();
            } catch (\Throwable $th) {
                die($th->getMessage());
            }
        }

        public function RegistrarTallaCliente($data)
        {
            try {
                $sql = "INSERT INTO tallacliente(idtalla, idcliente, detalle) VALUES (?,?,?)";
                $this->pdo->prepare($sql)->execute(array($data->idtalla,$data->idcliente,$data->detalle));
            } catch (\Throwable $th) {
                die($th->getMessage());
            }
        }

        public function ObtenerUnaTallaCliente($id)
        {
            try {
                $stm = $this->pdo->prepare("SELECT tc.idtalla AS idtallacliente, t.nombre AS talla, tc.detalle AS detalle FROM tallacliente AS tc INNER JOIN talla AS t ON tc.idtalla = t.idtalla WHERE tc.idcliente = ?");

                $stm->execute(array($id));

                return $stm->fetchAll(PDO::FETCH_OBJ);
            } catch (\Throwable $th) {
                die($th->getMessage());
            }
        }

        public function ObtenerTallasClientes()
        {
            try {
                /*$stm = $this->pdo->prepare("SELECT tc.idtalla AS idtallacliente, t.nombre AS talla, tc.detalle AS detalle FROM tallacliente AS tc INNER JOIN talla AS t ON tc.idtalla = t.idtalla");*/
                $stm = $this->pdo->prepare("SELECT tc.idtalla AS idtalla,tc.idtallacliente AS idtallacliente, t.nombre AS talla, tc.detalle AS detalle FROM tallacliente AS tc INNER JOIN talla AS t ON tc.idtalla = t.idtalla");
                $stm->execute();

                return $stm->fetchAll(PDO::FETCH_OBJ);
            } catch (\Throwable $th) {
                die($th->getMessage());
            }
        }

        public function ObtenerTallas()
        {
            try {
                $stm = $this->pdo->prepare("SELECT * FROM `talla`");
                $stm->execute();

                return $stm->fetchAll(PDO::FETCH_OBJ);
            } catch (\Throwable $th) {
                die($th->getMessage());
            }
        }
        
        public function EliminarTallaCliente($id)
        {
            try {
                $sql = "DELETE FROM tallacliente WHERE idtallacliente = ?";

                $this->pdo->prepare($sql)->execute(array($id));
            } catch (\Throwable $th) {
                die($th->getMessage());
            }
        }
    }
    
?>