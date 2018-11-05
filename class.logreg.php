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
        $str = 'SELECT * FROM ?';
        $stmt = $this->conn->prepare($str);
        var_dump($stmt);
        $stmt->bind_param('s', $tblName);
        var_dump($stmt);
        $query->close();
        var_dump($stmt);
        return $stmt;

        // $queryString = 'SELECT * FROM ' . $tblName;
        // return $this->conn->query($queryString);
    }
}