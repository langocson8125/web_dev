<?php
    require_once 'ConnectDatabase.class.php';
    class InsertDatabase extends CreateConnectionDatabase{
        //properties
        private $tableName; 

        //methods
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

            //$this->connect->exec($sql);
            //echo "New record created successfully";
        }
    }