<?php

function viewMaistas($tblName){

    $conn = new MySqliConnection('localhost', 'root', '', 'db-alspok');
    $table = $conn->tableView($tblName);
    $i = 1;
    while($row = $table->fetch_assoc()){
        echo '<tr><td>' . $row['id'] . '</td><td>' . $i++ . '</td><td>' . $row['product'] . '</td><td>' . $row['quantity'] . '</td><td>' . $row['notes'] . '</td></tr>';
    }
}                        