<?php
    include 'autoload.php';
    $query = new Model_QueryDatabase('users'); 
    $query->OpenConnection(); 
    $data = array( 
        array('name' => 'John', 'age' => '25', 'mail' => 'mailJohn@gmail.com'), 
        array('name' => 'Wendy', 'age' => '32', 'mail' => 'mailWendy@gmail.com') 
    );  
    $query->InsertData('users', $data);
    $test = $query->SelectData('users', '*');
    echo "<pre>";
    print_r($test);
    echo "</pre>";
    $query->CloseConnection();
?>
    
