<?php

// require_once('class.mysqlihandler.php');

function viewTable($tblName){
    var_dump($tblName);

    $connection = new mysqli('localhost', 'root', '', 'db_alspok');
    // $connection->mySqliCharSet();
    $table = $connection->tableView($tblName);
    $i = 1;
    while($row = $table->fetch_assoc()){
        echo "<tr><td class='tdw'>" . $row['id'] . "</td><td class='tdw'>" . $i++ . '</td><td>' . $row['product'] . '</td><td>' . $row['quantity'] . '</td><td>' . $row['notes'] . '</td></tr>' ;
    }
}                        

function insertTableRow($tblName, $insertData ){

    $insertDataArray = [];
    $i = 0;
    foreach($insertData as $item){
        $insertDataArray[$i++] = $item;
    }
    $connection = new mysqli('localhost', 'root', '', 'db_alspok');
    // $conn = $connection->mySqlConn();
    // $connection->mySqliCharSet();
    $queryString = 'INSERT INTO ' . $tblName . ' (product, quantity, notes) VALUES (?, ?, ?)';
    $stmt = $connection->prepare($queryString);
    $stmt->bind_param("sss", $insertDataArray[0], $insertDataArray[1], $insertDataArray[2]);
    // if($stmt->execute()) return true;
    $stmt->close();
}

function deleteTableRow($tblName, $deleteData){

    $conn = new mysqli('localhost', 'root', '', 'db_alspok');
    $queryString = 'SELECT * FROM ' . $tblName;
    $table = $conn->tableView($tblName, $queryString);
    $rowData = $table[$deleteData];
    }
