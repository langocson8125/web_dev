<?php
    include 'ConnectDatabase.class.php';
    include 'InsertDatabase.class.php';

    $test = new CreateConnectionDatabase('users');
    $test->OpenConnection();
    echo "<pre>";
    print_r($test);
    echo "</pre>";
    $insert = new InsertDatabase('user');
        echo "<pre>";
    print_r($insert);
    echo "</pre>";
    $insert->InsertData(array ('name' => 'son', 'mail' => 'langocson@gmail.com', 'age' => 20));

    $test->CloseConnection();
    echo "<pre>";
    print_r($test);
    echo "</pre>";
