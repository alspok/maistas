<?php

function logSubmit($logData){

    var_dump($logData);

    if( !empty($logData['logname']) && !empty($logData['logpassword'])){
        $conn = new MySqliConnection('localhost', 'root', '', 'db_alspok');
        $table = $conn->tableView('tbl_logreg');
        $boolen = false;
        while($row = $table->fetch_assoc()){
            echo '<br>' . $row['id'] . '<br>' . $row['username'] . '<br>' . $row['password'];
            if(($logData['logname'] == $row['username']) && ($logData['logpassword'] == $row['password'])){
                echo "<p style='color: green'> Loged in!</p>";
                $boolen = true;
                break;
            }
        }
        if(!$boolen) echo "<p style='color: red'>Entries does not mach. Try again or register.</p>";
    }
    else{
        echo "<p style='color: red'>Enter all tags</p>";
    }
    header('Refresh: 3; url=maistas.php');
}

function regSubmit($regData){

    if( !empty($regData['regname']) &&
        !empty($regData['regpassword']) &&
        !empty($regData['regemail']) &&
        !empty($regData['regphone'])){
            $conn = new MySqliConnection('localhost', 'root', '', 'db_alspok');
            if($conn->tableInsert('tbl_logreg', $regData)){;
            echo "<p style='color: green;'>Success! Login with user name and password</p>";
        }
        else{
        echo "<p style='color: red'>Enter all tags</p>";
        }
    }
}