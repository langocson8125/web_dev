<?php
    include '../autoload.php';
    class QueryDatabase extends CreateConnectionDatabase{
        //properties


        //methods
        //constructor 
        public function __construct(){
            $this->connect = parent::connect;
        }
        //create database
        public function CreateDatabase(){

        }
        // insert data
        public function InsertData(){

        }
        //select data
        public function SelectData(){
            
        }
        //delete data
        public function DeleteData(){

        }
        //update data
        public function UpdateData(){

        }
    }
