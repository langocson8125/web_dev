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
        echo "<pre>";
        print_r($test);
        echo "</pre>";
        $insert->InsertData(array ('name' => 'new', 'mail' => 'email@email.com', 'age' => 55));
    }
    else{
        $test->CloseConnection();
    }
    
