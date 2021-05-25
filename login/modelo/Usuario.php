<?php 
    include_once 'Conexion.php';
    class User extends Database{

        public function getUser($username, $password){
            $sql = "SELECT * FROM usuario WHERE Email= '$username' AND contrasena_u='$password'";

            $result = $this->connect()->query($sql);

            $numRows = $result->num_rows;
            if($numRows == 1){
                return true;
            }

            return false;
        }

    }
   ?> 