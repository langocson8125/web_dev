<?php
    class CreateConnectionDatabase{
        //properties
        protected $DBName;
        protected $Host;
        protected $DBUser;
        protected $DBPassword;
        protected  $option = array (
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        protected $dsn;
        public  $error;
        protected static $connect;

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
                self::$connect = new PDO($dsn, $user, $pass, $option);
            }
            // Catch any errors
                catch (PDOException $errors) {
                $this->error[] = $errors->getMessage();
                exit('Opp!!! Cannot create database connection<br/>');
            }
            
        }
        # check conect is ready establish
        public function isReady(){
            $flag = true;
            if(count($this->error) > 0){
                $flag = false;
            }
            return $flag;
        }
        # close a connection to database
        public function CloseConnection(){
            self::$connect = null;
        }
    }
