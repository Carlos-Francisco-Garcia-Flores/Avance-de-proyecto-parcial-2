<?php
    class PresentsController{
        private $vista;

        public function index(){
            $vista="APP/view/IndexRequestView.php";
            include_once("APP/view/PlantillaAdminView.php");
        }
    }