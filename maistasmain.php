<?php

function viewTable($tblName){

    $conn = new MySqliConnection('localhost', 'root', '', 'db_maistas');
    $queryString = 'SELECT * FROM ' . $tblName;
    $table = $conn->tableView($tblName, $queryString);
    $i = 1;
    while($row = $table->fetch_assoc()){
        echo "<tr><td class='tdw'>" . $row['id'] . "</td><td class='tdw'>" . $i++ . '</td><td>' . $row['product'] . '</td><td>' . $row['quantity'] . '</td><td>' . $row['notes'] . '</td></tr>';
    }
}                        

function insertTableRow($tblName, $insertData ){

    $insertDataArray = [];
    $i = 0;
    foreach($insertData as $item){
        $insertDataArray[$i++] = $item;
    }
    $connection = new MySqliConnection('localhost', 'root', '', 'db_maistas');
    $conn = $connection->mySqlConn();
    $queryString = 'INSERT INTO ' . $tblName . ' (product, quantity, notes) VALUES (?, ?, ?)';
    $stmt = $conn->prepare($queryString);
    $stmt->bind_param('sss', $insertDataArray[0], $insertDataArray[1], $insertDataArray[2]);
    if($stmt->execute()) return true;
    $stmt->close();
}

function deleteTableRow($tblName, $deleteData){

    $conn = new MySqliConnection('localhost', 'root', '', 'db_maistas');
    $queryString = 'SELECT * FROM ' . $tblName;
    $table = $conn->tableView($tblName, $queryString);
    $rowData = $table[$deleteData];
    }
