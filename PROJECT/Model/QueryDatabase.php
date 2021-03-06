<?php
    class Model_QueryDatabase{
        //properties
        private $DBName;
        private $Host;
        private $DBUser;
        private $DBPassword;
        private  $option = array (
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        private   $dsn;
        private   $errors;
        private   $connect;

        // methods
        # constructor
        public function __construct($DBName, $Host = 'localhost', $DBUser = 'root', $DBPassword = ''){
            $this->DBName       = $DBName;
            $this->Host         = $Host;
            $this->DBUser       = $DBUser;
            $this->DBPassword   = $DBPassword;
            $this->dsn          = 'mysql:host=' . $Host . ';dbname=' . $DBName;
        }
        # open a connection to database
        public function OpenConnection(){
            $user   = $this->DBUser;
            $pass   = $this->DBPassword;
            $option = $this->option;
            $dsn    = $this->dsn;
            try {
                $this->connect = new PDO($dsn, $user, $pass, $option);
            }
            // Catch any errors
                catch (PDOException $e) {
                $this->errors[] = $e->getMessage();
                exit("Error: " . $e->getMessage() . "<br/>");
            }
            
        }

        //create database
        public function CreateDatabase($newDatabaseName){
            $connect = $this->connect;
            $sql     = 'CREATE DATABASE ' . $newDatabaseName;
            try{
                // Prepare statement
                $stmt = $connect->prepare($sql);
                // execute the query
                if($stmt->execute())
                    return true;
            }
            catch (PDOException $e) {
                $this->errors[] = $e->getMessage();
                exit("Error: " . $e->getMessage() . "<br/>");
            }
        }

        // insert data
        public function InsertData($tableName, $dataInsert){
            $connect = $this->connect;
            $bindColumn = '';
            $bindValues = '';
            // make string bind values
            foreach ($dataInsert[0] as $key => $value) {
                $bindColumn .= "$key, ";
                $bindValues .= ":$key, ";
            }
            $bindColumn = rtrim($bindColumn, ", ");
            $bindValues = rtrim($bindValues, ", ");
            try{
                // prepare statement
                $stmt = $connect->prepare("INSERT INTO $tableName ($bindColumn) VALUES ($bindValues)");
                // begin the transaction
                $connect->beginTransaction();
                foreach ($dataInsert as $row) {
                    $stmt->execute($row);
                }
                // commit the transaction
                $connect->commit();
            }
            catch(PDOException $e){
                // roll back the transaction if something failed
                $connect->rollback();
                $this->errors[] = $e->getMessage();
                exit("Error: " . $e->getMessage() . "<br/>");
            }
        }

        //select data
        public function SelectData($tableName, $element = '*', $options = null){
            $connect = $this->connect;
            $sql     = '';
            // query
            if($element == '*'){
                $sql .= '*';
            }
            else if(is_array($element) && !in_array("*", $element)){
                foreach ($element as $key => $value) {
                    $sql .= $value . ",";
                }
                $sql = rtrim($sql, ", ");
            }
            // sql is column name
            try{
                if(is_array($options)){ 
                    if(array_key_exists("limit",$options) &&  array_key_exists("offset",$options)){
                        // query within limit and offset
                        $stmt = $connect->prepare("SELECT $sql FROM $tableName LIMIT {$options['limit']} OFFSET {$options['offset']}");
                    }
                    else if(array_key_exists("limit",$options) &&  !array_key_exists("offset",$options)){
                        // query within only limit
                        $stmt = $connect->prepare("SELECT $sql FROM $tableName LIMIT {$options['limit']}");
                    }
                    else {
                        $this->errors[] = 'Error: Wrong limit and offset';
                        exit('Error: Wrong limit and offset');
                    }
                }
                else { // NO LIMIT OR OFFSET
                    $stmt = $connect->prepare("SELECT $sql FROM $tableName");
                }

                $stmt->execute();
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                return $stmt->fetchAll();
            }
            catch(PDOException $e) {
                $this->errors[] = $e->getMessage();
                exit("Error: " . $e->getMessage());                
            }
        }

        //delete data
        public function DeleteData($tableName, $column, $columnValue){
            $connect = $this->connect;
            try{
                $sql = "DELETE FROM $tableName WHERE $column='$columnValue'";
                // Prepare statement
                $stmt = $connect->prepare($sql);
                // execute the query
                if($stmt->execute())
                    return true;
            }
            catch(PDOException $e){
                $this->errors[] = $e->getMessage();
                exit("Error: " . $e->getMessage());  
            }
        }

        //update data
        public function UpdateData($tableName, $dataUpdate, $column, $columnValue){
            $connect = $this->connect;
            $StrSqlValueUpdate = '';
            foreach ($dataUpdate as $key => $value) {
                $StrSqlValueUpdate .= "$key='$value', ";
            }
            $StrSqlValueUpdate = rtrim($StrSqlValueUpdate, ", ");
            try{
                $sql = "UPDATE $tableName SET $StrSqlValueUpdate WHERE $column='$columnValue'";
                // Prepare statement
                $stmt = $connect->prepare($sql);
                // execute the query
                if($stmt->execute())
                    return true;
            }
            catch(PDOException $e){
                $this->errors[] = $e->getMessage();
                exit("Error: " . $e->getMessage());  
            }
        }

        # close a connection to database
        public function CloseConnection(){
            $this->connect = null;
        }
    }
?>
