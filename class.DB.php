<?php

class DB {

    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $database = 'db_maistas';

    private function __construct($host, $user, $password, $database) {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
    }

    protected function connect() {
        return new mysqli($this->host, $this->user, $this->password, $this->database);
    }


}