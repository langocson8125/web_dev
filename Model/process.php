<?php
    function __autoload($filename){
        $filename .= ".class.php";
        require_once $filename;
    }

    $test = new CreateConnectionDatabase('users');
    $test->OpenConnection();
    if($test->isReady()){
        echo 'Successfully create a connect to database<br/>';
        $insert = new InsertDatabase('users');
        $insert->InsertData(array ('name' => 'bede', 'mail' => 'lafghfdsdcson@gmail.com', 'age' => 95));
    }
    else{
        $test->CloseConnection();
    }
    
