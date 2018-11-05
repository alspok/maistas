<?php
/* User registration and login class*/

class MySqliConnection{

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
    }

    public function tableView($tblName){

        $queryString = 'SELECT * FROM ' . $tblName;
        return $this->conn->query($queryString);
    }

    public function tableInsert($tblName, $regData){

        // $queryString = 'INSET INTO ? (username, password, email, phone) VALUES (?, ?, ?, ?)';
        // $query = $this->conn->prepare($queryString);
        // $query->bind_param('sssss', $tblName, $regData['regname'], $regData['regpassword'], $regData['regemail'], $regData['regphone']);
        // $query->execute();
        // $query->close();
        $queryString = "INSER INTO " . $tblName . " (username, password, email, phone) VALUES (" . $regData['regname'] . ", " . $regData['regpassword'] . ", " .  $regData['regmail'] . ", " .  $regData['regphone'] . ")";
        $this->conn->query($queryString);
    }
}