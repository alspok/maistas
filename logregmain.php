<?php

function logSubmit($logData){

    var_dump($logData);

    if(!empty($logData['logsubmit']) &&
        !empty($logData['logname']) &&
        !empty($logData['logpassword'])){
            $conn = new MySqlConnection('localhost', 'root', '', 'db_maistas');
            $table = $conn->tableView('tbl_logreg');
            while($row = $table->fetch_assoc()){
                echo $row['id'] . '<br>' . $row['username'] . '<br>' . $row['password'];
            }
            echo '<p>OK</p>';
    }
    else{
        echo "<p style='color: red'>Enter all tags</p>";
    } 
}

function regSubmit($regData){

    if(!empty($regData['regsubmit']) &&
        !empty($regData['regname']) &&
        !empty($regData['regpassword']) &&
        !empty($regData['regmail']) &&
        !empty($regData['regphone'])){
            echo '<p>OK</p>';
        }
    else{
        echo "<p style='color: red'>Enter all tags</p>";
    }
}