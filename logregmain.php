<?php

function logSubmit($logData){

    if(!empty($logData['logsubmit']) &&
        !empty($logData['logname']) &&
        !empty($logData['logpassword'])){
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