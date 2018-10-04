<?php

function loadAllTable($dbName, $tblName){

    $conn = new MySqliHandler($dbName, $tblName);
    $result = $conn->tblLoad($tblName);
    $i = 1;
    while($row = $result->fetch_array(MYSQLI_ASSOC)){
        echo '<td>' . $row['id'] . '</td><td>' . $i++ . '</td><td>' . $row['preke'] . '</td><td>' . $row['kiekis'] . '</td><td >' . $row['pastabos'] . '</td></tr>';
    }
}

function insertTableRow($dbName, $tblName){

    $dataSet = $_POST;
    $mysqli = new MySqliHandler($dbName, $tblName);
    $mysqli->tblInsert($dataSet);
}

function deleteTableRow($dbName, $tblName){

    var_dump($_POST);
    $dataSet = $_POST;
    $mysqli = new MySqliHandler($dbName, $tblName);
    $result = $mysqli->tblLoad($tblName);
    for($i = 0; $i < $_POST['maistasselect']; $i++){
        $row = $result->fetch_array(MYSQLI_ASSOC);
    }
    var_dump($row);
    $mysqli->tblDelete($row);
}

function updateTableRow(){

}
