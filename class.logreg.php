<?php
/* User registration and login class*/

class MySqlConnection{

    function constructor($serverName, $userName, $userPassword, $dbName, $tblName){

        $this->serverName = $serverName;
        $this->userName = $userName;
        $this->userPassword = $userPassword;
        $this->dbName = $dbName;
        $this->tblName = $tblName;
        $this->dbConnection($this->serverName, $this->userName, $this->userPassword);
    }
    
    function dbConnection(){
        
        $conn = mysqli_connect($this->serverName, $this->userName, $this->userPassword)
            or die('Could not connect to server.');
        var_dump($conn);

        return $conn;
    }

    function dbView(){

    }

    function dbInsert($dbQuery){

    }

    function dbDelete($dbQuery){

    }

    function dbUpdate($dbQuery){

    }
}