<?php
    require_once 'CreateConnectionDatabase.class.php';
    class InsertDatabase extends CreateConnectionDatabase{
        // properties
        private $sql;
        private $tableName; 
        public $errors;
        // methods
        # constructor
        public function __construct($table){
            $this->tableName = $table;
        }
        //insert data
        public function InsertData($arrayData){
            // make a sql insert query
            $sql = "INSERT INTO $this->tableName";

            $nameInsert     = '';
            $valueInsert    = '';
            foreach ($arrayData as $key => $value) {
                $nameInsert .= $key . ",";
                $valueInsert .= "'" . $value . "',";
            }
            $sql .= " (" . substr($nameInsert,0,-1) . ") VALUES (" . substr($valueInsert,0,-1) . ")";
            $this->sql = $sql;
            try{
                parent::$connect->exec($this->sql);
            }
            catch(Exception $e){
                $this->errors = $e->getMessage();
                die('Something went wrong!!! Cannot insert database<br/>');
            }
        }
    }   
