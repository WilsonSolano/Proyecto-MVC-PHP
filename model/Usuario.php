<?php
    class Usuario
    {
        private $pdo;
        public $idusuario;
        public $nombre;
        public $apellido;
        public $telefono;
        public $email;
        public $clave;
        public $idpreguntasecreta;
        public $respuestasecreta;
        public $idtipousuario;
        public $estado;

        //contructor
        public function __CONSTRUCT()
        {
            try 
            {
                $this->pdo = Conexion::Conectar();
            } catch (\Throwable $th) {
                die($th->getMessage());
            }
        }

        public function RegistrarUsuario($data)
        {
            try 
            {
                $sql = "INSERT INTO usuario(nombre, apellido, telefono, email, clave, idpreguntasecreta, respuestasecreta, idtipousuario) VALUES (?,?,?,?,?,?,?,?)";
                $this->pdo->prepare($sql)->execute(array($data->nombre, $data->apellido,$data->telefono,$data->email,$data->clave,$data->idpreguntasecreta,$data->respuestasecreta,$data->idtipousuario));
            } catch (\Throwable $th) {
                die($th->getMessage());
            }
        }

        public function ListarUsuariosActivos()
        {
            try 
            {
                $stm = $this->pdo->prepare("SELECT u.idusuario AS idusuario, u.nombre AS nombre, u.apellido AS apellido, u.telefono AS telefono, u.email AS email, tp.nombre AS tipo FROM usuario AS u INNER JOIN tipousuario as tp on u.idtipousuario = tp.idtipousuario WHERE u.estado = 1;");
                $stm->execute();

                return $stm->fetchAll(PDO::FETCH_OBJ);
            } catch (\Throwable $th) {
                die($th->getMessage());
            }
        }

        public function ListarUsuariosInactivos()
        {
            try 
            {
                $stm = $this->pdo->prepare("SELECT u.idusuario AS idusuario, u.nombre AS nombre, u.apellido AS apellido, u.telefono AS telefono, u.email AS email, tp.nombre AS tipo FROM usuario AS u INNER JOIN tipousuario as tp on u.idtipousuario = tp.idtipousuario WHERE u.estado = 0;");
                $stm->execute();

                return $stm->fetchAll(PDO::FETCH_OBJ);
            } catch (\Throwable $th) {
                die($th->getMessage());
            }
        }

        public function ListarPreguntas()
        {
            try 
            {
                $stm = $this->pdo->prepare("SELECT * FROM `preguntasecreta`");
                $stm->execute();

                return $stm->fetchAll(PDO::FETCH_OBJ);
            } catch (\Throwable $th) {
                die($th->getMessage());
            }
        }

        public function ObtenerUsuario($id)
        {
            try 
            {
                $stm = $this->pdo->prepare("SELECT u.idusuario AS idusuario, u.nombre AS nombre, u.apellido AS apellido, u.telefono AS telefono, u.email AS email,u.estado, u.idtipousuario AS idtipousuario, tp.nombre AS tipo, u.clave AS clave, u.idpreguntasecreta AS idpreguntasecreta, u.respuestasecreta AS respuestasecreta, ps.nombre AS pregunta FROM usuario AS u INNER JOIN tipousuario AS tp ON u.idtipousuario = tp.idtipousuario INNER JOIN preguntasecreta AS ps ON u.idpreguntasecreta = ps.idpreguntasecreta WHERE u.idusuario = ?");
                $stm->execute(array($id));
                return $stm->fetch(PDO::FETCH_OBJ);
            } catch (\Throwable $th) {
                die($th->getMessage());
            }
        }

        public function ActualizarUsuario($data)
        {
            try {
                $sql ="UPDATE usuario SET nombre= ?,apellido= ?,telefono= ?,email= ?,idtipousuario = ? WHERE idusuario= ?";
                $this->pdo->prepare($sql)->execute(array($data->nombre, $data->apellido, $data->telefono, $data->email, $data->idtipousuario, $data->idusuario));
            } catch (\Throwable $th) {
                die($th->getMessage());
            }
        }

        public function CambiarEstadoUsuario($nuevo_estado, $id)
        {
            try 
            {
                $sql = "UPDATE usuario SET estado = ? WHERE idusuario = ?";

                $this->pdo->prepare($sql)->execute(array($nuevo_estado, $id));
            } catch (\Throwable $th) {
                die($th->getMessage());
            }
        }

        public function ActualizarClave($clave, $id)
        {
            try 
            {
                $sql = "UPDATE usuario SET clave = ? WHERE idusuario = ?";
                $this->pdo->prepare($sql)->execute(array($clave, $id));
            } catch (\Throwable $th) {
                die($th->getMessage());
            }
        }

        public function ActualizarPregunta($idpreguntasecreta, $respuestasecreta, $id)
        {
            try 
            {
                $sql = "UPDATE usuario SET idpreguntasecreta = ?, respuestasecreta = ? WHERE idusuario = ?";
                $this->pdo->prepare($sql)->execute(array($idpreguntasecreta, $respuestasecreta, $id));

            } catch (\Throwable $th) {
                die($th->getMessage());
            }
        }

        public function Entrar($email, $clave)
        {
            try 
            {
                $stm = $this->pdo->prepare("SELECT * FROM usuario WHERE email = ? AND clave = ? AND estado = 1");

                $stm->execute(array($email, $clave));

                return $stm->fetch(PDO::FETCH_OBJ);
            } catch (\Throwable $th) {
                die($th->getMessage());
            }
        }

        public function GenerarSesion($data)
        {
            try {
                //condicionar el inicio de sesion
                if ($data != null) {
                    //tomar los valores en variables de sesion
                    $_SESSION["id"] = $data->idusuario;
                    $_SESSION["nombre"] = $data->nombre;
                    $_SESSION["apellido"] = $data->apellido;
                    $_SESSION["email"] = $data->email;

                    if($data->idtipousuario == 1){
                        //entrar como encargado de inventario
                        header("Location: ?c=".base64_encode("Home"));
                    }
                    else
                    {
                        //entrar como otro tipo de usuario
                    }
                }
                else
                {
                    //enviar al login
                    header("Location: ?c=".base64_encode("Login"));
                }
            } catch (\Throwable $th) {
                die($th->getMessage());
            }
        }
    }
    
?>