<?php
    class UserModel{
        //creamos un atributo para manipular los datos en la bd
        private $UserConnection;

        //definimos el contructor de la clase usermodel
        public function __construct(){
            //requiero la clase dbconnection 
            require_once('APP/config/DBConnection.php');
            //instranciamos userconnection con dbconnection 
            $this->UserConnection=new DBConnection();
        }

        //a partir de esto vienen los metodos logicos de la app

        //metodo para obtener todos los usuarios
        public function getAll(){
            //paso 1 creo la consulta
            $sql="SELECT * FROM user";
            //paso 2 llamo a la conneccion 
            $connection =$this->UserConnection->getconnection();
            //paso 3 ejecuto la consulta
            $result=$connection->query($sql);
            //paso 4 verifico y acomodo datos 
            //paso 4.1 creo un arreglo para almacenar los usuarios de la bd 
            $users=array();
            //tengo que recorrer $result para ir extrayendo los renglones (registros de usuarios)
            //ocupare un while y la instruccion fetch_assoc
            while($user=$result->fetch_assoc()){
                $users[]=$user;
            }
            //paso 5 cierro la coneccion 
            $this->UserConnection->closeConecction();
            //paso 6 arrojo resultados
            return $users;
        }

        //getById metodo que extrae un usuario por su id
        public function getById($id){
            //paso 1 creamos la consulta
            $sql="SELECT * FROM user WHERE IdUser = $id";
            //paso 2 obtenemos la coneccion
            $connection=$this->userConnection->getConnection();
            //paso 3 ejecutamos la consulta
            $result=$connection->query($sql);
            //paso 4 verificamos que existan resultados
            if($result && $result->num_rows >0){
                $user=$result->fetch_assoc();                
            }else{
                $user=false;
            }
            //paso 5 cerramos la coneccion
            $this->UserConnection->closeConnection();
            //paso 6
            return $user;
        }

        //metodo para verificar credenciales de logeo
        public function getCredentials($us,$ps){
            //paso 1 creamos la consulta
            $sql="SELECT * FROM user WHERE usuario = '".$us."' AND password = '".$ps."'";
            //paso 2 obtenemos la coneccion
            $connection =$this->UserConnection->getconnection();
            //paso 3 ejecutamos la consulta
            $result=$connection->query($sql);
            //paso 4 verificamos que existan resultados
            if($result && $result->num_rows >0){
                $user=$result->fetch_assoc();                
            }else{
                $user=false;
            }
            //paso 5 cerramos la coneccion
            $this->UserConnection->closeConecction();
            //paso 6 arrojamos el resultado
            return $user;
        }

        public function insertUser(){
            $nombre = $user['Nombre'];
            $apellidoP = $user['APaterno'];
            $apellidoM = $user['ApMaterno'];
            $usuario = $user['usuario'];
            $password = $user['password'];
    
            $sql = "INSERT INTO user (Nombre, APaterno, ApMaterno,usuario, password) VALUES ('$nombre', '$apellidoP', '$apellidoM', '$usuario', '$password')";
            $connection = $this->UserConnection->getConnection();
            $result = $connection->query($sql);
            $this->UserConnection->closeConnection();
            return $result;
        }
    
        // Método para editar un usuario existente
        public function updateUser($user){
            $nombre = $user['Nombre'];
            $apellidoP = $user['APaterno'];
            $apellidoM = $user['ApMaterno'];
            $usuario = $user['usuario'];
            $password = $user['password'];
    
            $sql = "UPDATE user SET Nombre = '$nombre', Apellido = '$apellido', Usuario = '$usuario', Password = '$password' WHERE usuario = $usuario";
            $connection = $this->UserConnection->getConnection();
            $result = $connection->query($sql);
            $this->UserConnection->closeConnection();
            return $result;
        }
    
        // Método para eliminar un usuario por su id
        public function deleteUser(){
            $usuario = $user['usuario'];
            $password = $user['password'];
            $sql = "DELETE * FROM user WHERE usuario = $usuario AND password = $password";
            $connection = $this->UserConnection->getConnection();
            $result = $connection->query($sql);
            $this->UserConnection->closeConnection();
            return $result;
        }
    }
    ?>