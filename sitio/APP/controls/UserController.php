<?php
require_once("APP/models/UserModel.php");
    class UserController{
        private $vista;
        private $modelo;

        public function Index(){
            //en el index vamos a mostrar una tabla con todos los usuarios
            $vista="APP/view/IndexUserView.php";

            $modelo=new UserModel();
            $datos=$modelo->getAll();

            include_once("APP/view/PlantillaAdminView.php");
        }

        public function CallFormLogin(){
            $vista="APP/view/LoginView.php";
            include_once("APP/view/PlantillaAdminView.php");
        }

        public function CallFormAddUser(){
            $vista="APP/view/IndexAddUser.php";
            include_once("APP/view/PlantillaAdminView.php");
        }
        public function CallFormDelUser(){
            $vista="APP/view/IndexDelUser.php";
            include_once("APP/view/PlantillaAdminView.php");
        }
        public function CallFormModUser(){
            $vista="APP/view/IndexModUser.php";
            include_once("APP/view/PlantillaAdminView.php");
        }

        public function Login(){
            
            $modelo=new UserModel();
            $usuario=$modelo->getCredentials($_POST['user'],$_POST['password']);
            if($usuario==false){
                //llmar a una pantalla de error
                $vista="APP/view/ErrorAdminView.php";
            }else{
                //llamar a pantalla pricipal
                //agregamos variables de sesion 
                $vista="APP/view/IndexAdminView.php";
            }
            include_once("APP/view/PlantillaAdminView.php");
        }

        public function AddUser(){
            
            $modelo=new UserModel();
            $usuario=$modelo->insertUser($_POST['name'],$_POST['ap'], $_POST['apm'],$_POST['user'],$_POST['password']);
            if($usuario==false){
                //llmar a una pantalla de error
                $vista="APP/view/ErrorAdminView.php";
            }else{
                //llamar a pantalla pricipal
                //agregamos variables de sesion 
                $vista="APP/view/IndexAdminView.php";
            }
            include_once("APP/view/PlantillaAdminView.php");
        }

        public function ModUser(){
            
            $modelo=new UserModel();
            $usuario=$modelo->updateUser($_POST['user'],$_POST['password']);
            if($usuario==false){
                //llmar a una pantalla de error
                $vista="APP/view/ErrorAdminView.php";
            }else{
                //llamar a pantalla pricipal
                //agregamos variables de sesion 
                $vista="APP/view/IndexAdminView.php";
            }
            include_once("APP/view/PlantillaAdminView.php");
        }
        public function DelUser(){
            
            $modelo=new UserModel();
            $usuario=$modelo->deleteUser($_POST['user'],$_POST['password']);
            if($usuario==false){
                //llmar a una pantalla de error
                $vista="APP/view/ErrorAdminView.php";
            }else{
                //llamar a pantalla pricipal
                //agregamos variables de sesion 
                $vista="APP/view/IndexAdminView.php";
            }
            include_once("APP/view/PlantillaAdminView.php");
        }
    }
?>