<?php

function logSubmit($logData){

    if( !empty($logData['logname']) && !empty($logData['logpassword'])){
        $conn = new MySqlConnection('localhost', 'root', '', 'db_maistas');
        $table = $conn->tableView('tbl_logreg');
        $boolen = false;
        while($row = $table->fetch_assoc()){
            // echo '<br>' . $row['id'] . '<br>' . $row['username'] . '<br>' . $row['password'];
            if(($logData['logname'] == $row['username']) && ($logData['logpassword'] == $row['password'])){
                echo "<p style='color: green'> Loged in!</p>";
                $boolen = true;
                break;
            }
        }
        if(!$boolen) echo "<p style='color: red'>Entries does not mach. Try again,</p>";
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