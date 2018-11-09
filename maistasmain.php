<?php

function viewMaistas($tblName){

    $conn = new MySqliConnection('localhost', 'root', '', 'db_maistas');
    $table = $conn->tableView($tblName);
    $i = 1;
    while($row = $table->fetch_assoc()){
        echo "<tr><td class='tdw'>" . $row['id'] . "</td><td class='tdw'>" . $i++ . '</td><td>' . $row['product'] . '</td><td>' . $row['quantity'] . '</td><td>' . $row['notes'] . '</td></tr>';
    }
}                        