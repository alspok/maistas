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

        $queryString = 'SELECT * FROM ' . $tblName;
        return $this->conn->query($queryString);
    }
}