<<<<<<< HEAD
<?php

function loadTable($tableName){

    $conn = new MySqlHandler($tableName);

    $result = $conn->tbSelectAll();
    $i = 1;
    while($row = $result->fetch_array(MYSQLI_ASSOC)){
        echo '</td><td>' . $i++ . '</td><td>' . $row['preke'] . '</td><td>' . $row['kiekis'] . '</td><td >' . $row['pastabos'] . '</td></tr>';
    }
}

function insertTableRow($tableName, $setData){

    $conn = new MySqlHandler($tableName);
    var_dump($tableName);

    if(!empty($setData['prk']) && !empty($setData['kks'])){
        $queryString = 'INSERT INTO ' . $tableName . ' (preke, kiekis, pastabos) VALUES (?, ?, ?)';
        var_dump($queryString);
        $stmt = $conn->prepare($queryString);
        var_dump($stmt);
        $stmt->bind_param('sss', $setData['prk'], $setData['kks'], $setData['pstbs'] );
        $stmt->execute();
        $stmt->close();

        // $queryString = 'INSERT INTO ';
        // $queryString .= $conn->tblName ;
        // $queryString .= ' (preke, kiekis, pastabos)';
        // $queryString .= ' VALUES (';
        // $queryString .=  "'" . $setData['prk'] . "'" . ',';
        // $queryString .=  "'" . $setData['kks'] . "'" . ',';
        // $queryString .=  "'" . $setData['pstbs'] . "'" . ')';

        $conn->query($queryString);
    }
}

function deleteTableRow(){

}
=======
<?php

function loadTable($tableName){

    $conn = new MySqlHandler($tableName);

    $result = $conn->tbSelectAll();
    $i = 1;
    while($row = $result->fetch_array(MYSQLI_ASSOC)){
        echo '</td><td>' . $i++ . '</td><td>' . $row['preke'] . '</td><td>' . $row['kiekis'] . '</td><td >' . $row['pastabos'] . '</td></tr>';
    }
}

function insertTableRow($tableName, $setData){

    $conn = new MySqlHandler($tableName);
    var_dump($tableName);

    if(!empty($setData['prk']) && !empty($setData['kks'])){
        $queryString = 'INSERT INTO ' . $tableName . ' (preke, kiekis, pastabos) VALUES (?, ?, ?)';
        var_dump($queryString);
        $stmt = $conn->prepare($queryString);
        var_dump($stmt);
        $stmt->bind_param('sss', $setData['prk'], $setData['kks'], $setData['pstbs'] );
        $stmt->execute();
        $stmt->close();

        // $queryString = 'INSERT INTO ';
        // $queryString .= $conn->tblName ;
        // $queryString .= ' (preke, kiekis, pastabos)';
        // $queryString .= ' VALUES (';
        // $queryString .=  "'" . $setData['prk'] . "'" . ',';
        // $queryString .=  "'" . $setData['kks'] . "'" . ',';
        // $queryString .=  "'" . $setData['pstbs'] . "'" . ')';

        $conn->query($queryString);
    }
}

function deleteTableRow(){

}
>>>>>>> 1431887597ee621dcf64a7b8240ac3e881494127
