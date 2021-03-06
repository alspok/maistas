<?php

namespace App\Libs;

class Database
{
    public $conn;
    public $query = '';
    public $result;

    public function __construct()
    {
        $this->conn = mysqli_connect('localhost', 'root', '', 'db_alspok_maistas');
        if(!$this->conn) echo 'Connection error';
    }

    // public function connect()
    // {
    //     $this->conn = mysqli_connect('localhost', 'root', '', 'db_alspok_maistas');
    //     if(!$this->conn) echo 'Connection error';
    //     return $this;
    // }

    public function getQuery()
    {
        return $this->query;
    }

    public function select($target = '*')
    {
        $this->query = 'SELECT ' . $target . ' ';
        return $this;
    }

    public function from($tableName)
    {
        $this->query .= 'FROM ' . $tableName . ' ';
        return $this;
    }

    public function where($field, $value, $operator = '=')
    {
        $this->query .= 'WHERE ' . $field . ' ' . $operator . ' ' . $value;
        return $this;
    }

    public function whereAnd($field, $value, $operator = '=')
    {
        $this->query .= 'AND ' . $field . ' ' . $operator . ' ';
        return $this;
    }

    public function whereOr($field, $value, $operator = '=')
    {
        $this->query .= 'OR ' . $field . ' ' . $operator . ' ';
        return $this;
    }

    public function insert($tableName)
    {
        $this->query .= 'INSERT INTO ' . $tableName . ' ';
        return $this;
    }

    public function column($columns)
    {

        $this->query .= '(' . $columns . ')';
        return $this;
    }

    public function values($values)
    {
        $this->query .= ' VALUES (' . $values . ')';
        return $this;
    }

    public function delete($tableName)
    {
        $this->query .= 'DELETE FROM ' . $tableName . ' ';
        return $this;
    }

    public function update($tableName)
    {
        $this->query .= 'UPDATE ' . $tableName;
        return $this;
    }

    public function set($column, $value, $operator)
    {
        $this->query .= ' SET ' . $column . $operator . $value;
        return $this;
    }



    public function putData()
    {
        $this->conn->query($this->query);
        return $this;
    }

    public function getData()
    {
        // $this->result = $this->conn->query($this->query)->fetch_array(MYSQLI_NUM);
        $this->result = $this->conn->query($this->query);

        while($row = $this->result->fetch_array(MYSQLI_BOTH)){
            foreach($row as $item){
                echo $item . '   ';
            }
            echo '<br>';
        }
    }

    public function get()
    {
        $dbData = [];
        $this->result = $this->conn->query($this->query);

        while($row = $this->result->fetch_array(MYSQLI_ASSOC)){
            foreach($row as $item){
                array_push($dbData, $item);
            }
        }
        return $dbData;
    }
}