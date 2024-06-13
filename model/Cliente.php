<?php
    class Cliente
    {
        private $pdo;

        public $idcliente;
        public $nombre;
        public $apellido;
        public $telefono;
        public $direccion;
        public $email;
        public $sexo;
        public $fechanacimiento;
        public $idusuarioregistro;
        public $estado;

        public function __CONSTRUCT()
        {
            try {
                $this->pdo = Conexion::Conectar();
            } catch (Throwable $t) {
                die($t -> getMessage());
            }
        }

        public function RegistrarCliente($data)
        {
            try {
                $sql= "INSERT INTO cliente(idcliente, nombre, apellido,telefono, direccion, email, sexo, fechanacimiento, idusuario) VALUES (?,?,?,?,?,?,?,?,?,?)";
                $this->pdo->prepare($sql)->execute(array($data->nombre,$data->apellido,$data->telefono,$data->direccion,$data->email,$data->sexo,$data->fechanacimiento,$data->idusuarioregistro));

            } catch (throwable $t) {
                die($t->getMessage());
            }
        }

        public function ListarClientesActivos()
        {
            try {
                $stm = $this->pdo->prepare("SELECT c.idcliente AS idcliente,c.nombre AS nombre, c.apellido AS apellido, c.telefono AS telefono, c.direccion AS direccion, c.email AS email, c.sexo AS sexo,DATE_FORMAT(c.fechanacimiento, '%d-%m-%Y')As fechanacimiento, TIMESTAMPDIFF(YEAR ,c.fechanacimiento,CURDATE()),AS edad, c.idusuarioregistro AS idusuarioregistro,u.apellido AS registradopor FROM cliente AS c INNER JOIN usuario AS u ON c.idusuarioresgistro=u.idusuario WHERE c.estado=1");
                $stm->execute();

                return $stm->fetchAll(PDO::FETCH_OBJ);
            } catch (Throwable $t) {
                throw $t;
            }
        }

        public function ListarClientesInactivos()
        {
            try 
            {
                $stm = $this->pdo->prepare("SELECT c.idcliente AS idcliente,c.nombre AS nombre, c.apellido AS apellido, c.telefono AS telefono, c.direccion AS direccion, c.email AS email, c.sexo AS sexo,DATE_FORMAT(c.fechanacimiento, '%d-%m-%Y')As fechanacimiento, TIMESTAMPDIFF(YEAR ,c.fechanacimiento,CURDATE()),AS edad, c.idusuarioregistro AS idusuarioregistro,u.apellido AS registradopor FROM cliente AS c INNER JOIN usuario AS u ON c.idusuarioresgistro=u.idusuario WHERE c.estado=0");
                $stm->execute();

                return $stm->fetchAll(PDO::FETCH_OBJ);
            } catch (\Throwable $th) {
                die($th->getMessage());
            }
        }

        public function ObtenerCliente($id){
            try {
                $stm = $this->pdo->prepare("SELECT c.idcliente AS idcliente,c.nombre AS nombre, c.apellido AS apellido, c.telefono AS telefono, c.direccion AS direccion, c.email AS email, c.sexo AS sexo,DATE_FORMAT(c.fechanacimiento, '%d-%m-%Y')As fechanacimiento, c.idusuarioregistro AS idusuarioregistro,u.apellido AS registradopor FROM cliente AS c INNER JOIN usuario AS u ON c.idusuarioresgistro=u.idusuario WHERE idcliente=?");
                $stm->execute(array($id));

                return $stm->fetch(PDO::FETCH_OBJ);
            } catch (Throwable $t) {
                die($t->getMessage());
            }
        }

        public function ActualizarCliente($data)
        {
            try {
                $sql = "UPDATE cliente SET nombre=?, apellido=?,telefono=?,direccion=?,email=?,sexo=?,fechonacimiento=? WHERE idcliente=?";
                $this->pdo->prepare($sql)->execute(array($data->nombre,$data->apellido,$data->telefono,$data->direccion,$data->email,$data->sexo,$data->fechanacimiento,$data->idcliente));
            } catch (Throwable $t) {
                die($t->getMessage());
            }
        }

        public function CambiarEstadoCliente($nuevo_estado,$id)
        {
            try{
                $sql="UPDATE cliente SET estado=? WHERE idcliente=?";
                $this->pdo->prepare($sql)->execute(array($nuevo_estado,$id));
            }
            catch(Throwable $t)
            {
                die($t->getMessage());
            }
        }
    }
?>