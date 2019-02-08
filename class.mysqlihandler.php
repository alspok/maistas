<?php
/* User registration and login class*/

class MySqliConnection extends mysqli{

    private $hostName;
    private $userName;
    private $password;
    private $dbName;

    function __construct($hostName, $userName, $password, $dbName){

        $this->hostName = $hostName;
        $this->userName = $userName;
        $this->password = $password;
        $this->dbName = $dbName;
        $this->conn = mysqli($this->hostName, $this->userName, $this->password, $this->dbName);
    }

    // public function mysqliConn(){

    //     $this->conn = new mysqli($this->hostName, $this->userName, $this->password, $this->dbName);
    //     return $this->conn;
    // }

    // public function mySqliCharSet(){

    //     // utf8mb4_lithuanian_ci
    //     $this->conn->set_charset('utf8mb4');
    //     $charSet = $this->conn->character_set_name();
    //     var_dump($charSet);

    // }

    public function tableView($tblName){

        $queryString = 'SELECT * FROM ' . $tblName;
        $query = $this->conn->query($queryString);
        
        return $query;
    }

    public function tableInsert($tblName, $regData){

        $queryString = 'INSERT INTO ' . $tblName . ' (username, password, email, phone) VALUES (?, ?, ?, ?)';
        $query = $this->conn->prepare($queryString);
        $query->bind_param('ssss', $regData['regname'], $regData['regpassword'], $regData['regemail'], $regData['regphone']);
        $query->execute();
        $query->close();

        return true;
    }

    public function tableDelete($tblName){
        
    }
}