<?php

function viewTableMaistas($tblName){

    $conn = new MySqliConnection('localhost', 'root', '', 'db_maistas');
    $queryString = 'SELECT * FROM ' . $tblName;
    $table = $conn->tableView($tblName, $queryString);
    $i = 1;
    while($row = $table->fetch_assoc()){
        echo "<tr><td class='tdw'>" . $row['id'] . "</td><td class='tdw'>" . $i++ . '</td><td>' . $row['product'] . '</td><td>' . $row['quantity'] . '</td><td>' . $row['notes'] . '</td></tr>';
    }
}                        

function insertTableRowMaistas($tblName, $insertData ){

    $connection = new MySqliConnection('localhost', 'root', '', 'db_maistas');
    $conn = $connection->mySqlConn();
    $queryString = 'INSERT INTO ' . $tblName . ' (product, quantity, notes) VALUES (?, ?, ?)';
    $query = $conn->prepare($queryString);
    $query->bind_param('sss', $insertData['maistaspreke'], $insertData['maistaskiekis'], $insert['maistaspastabos']);
    $query->execute();
    // $query->close();
}

function deleteTableRow(){

}