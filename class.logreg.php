<?php
/* User registration and login class*/

class MySqlConnection{

    private $hostName;
    private $userName;
    private $password;
    private $dbName;

    function __construct($hostName, $userName, $password, $dbName){

        $this->hostName = $hostName;
        $this->userName = $userName;
        $this->password = $password;
        $this->dbName = $dbName;

        $this->conn = new mysqli($this->hostName, $this->userName, $this->password, $this->dbName);
        var_dump($this->conn);
    }

    public function tableView($tblName){

        $query = 'SELECT * FROM ' . $tblName;
        return $this->conn->query($tblName);
    }
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