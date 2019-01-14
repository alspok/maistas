<!DOCUNENT html>
<?php
    if(isset($_SESSION['logname'])) {
    die("Please login");
}
?>

<html>
    <head>
        <title>Alspok Maistas</title>
        <!-- <meta charset='utf8_lithuanian_ci'> -->
        <link rel='stylesheet' href='maistas.css'>
        <?php
            // require_once('class.mysqlihandler.php');
            require_once('maistasmain.php');
        ?>
    </head>
    <body>
        <!-- Maistas table -->
        <!-- <div class='flex-center'> -->
        <h2 class='box'>Maistas</h2>
            <table class='box'>
                <thead class='th'>
                        <th>Id</th><th>Nr</th><th>Prekė</th><th>Kiekis</th><th>Pastabos</th><th></th>
                </thead>
                <tr>
                    <?php viewTable('tbl_maistas'); ?>
                </tr>
                <tr>
                    <td></td><td></td>
                    <form action='' method='post'>
                        <td><input type='text' name='maistaspreke'> </td>
                        <td><input type='text' name='maistaskiekis'></td>
                        <td><input type='text' name='maistaspastabos'></td>
                        <td><input type='submit' name='maistas' value='Įvesti'></td>
                        <?php
                            if(!empty($_POST['maistas']) && !empty($_POST['maistaspreke']) && !empty($_POST['maistaskiekis'])){
                                if(insertTableRow('tbl_maistas', $_POST)) header('Refresh: 0');
                            }
                        ?>
                    </form>
                </tr>
                <tr></tr>
                <tr>
                    <form action='' method='post'>
                        <td></td>
                        <td><input size='3' type='text' name='maistasselect'></td>
                        <td></td>
                        <td><input type='submit' name='maistasupdate' value='Redaguoti'></td>
                        <td><input type='submit' name='maistastempdelete' value='Ištrinti laikinai'></td>
                        <td><input type='submit' name='maistasdelete' value='Ištrinti'></td>
                        <?php
                        if(!empty($_POST['maistasselect']) && !empty($_POST['maistasdelete'])){
                            $stop = 0;
                            deleteTableRow('tbl_maistas', $_POST['maistasselect']);
                            echo "<script> location.replace('maistas.php'); </script>";
                        }
                        ?>
                    </form>
                </tr>
            </table>
        </div>

        <!-- Kita table -->
        <h2 class='box'>Kita</h2>
        <!-- <div class='flex-center'> -->
            <table class='box'>
                <thead class='th'>
                        <th>Id</th><th>Nr</th><th>Prekė</th><th>Kiekis</th><th>Pastabos</th><th></th>
                </thead>
                <tr>
                    <?php viewTable('tbl_kita'); ?>
                </tr>
                <tr>
                    <td></td><td></td>
                    <form action='' method='post'>
                        <td><input type='text' name='kitapreke'> </td>
                        <td><input type='text' name='kitakiekis'></td>
                        <td><input type='text' name='kitapastabos'></td>
                        <td><input type='submit' name='kita' value='Įvesti'></td>
                        <?php
                            if(!empty($_POST['kita']) && !empty($_POST['kitapreke']) && !empty($_POST['kitakiekis'])){
                                if(insertTableRow('tbl_kita', $_POST)){
                                    echo "<script> location.replace('maistas.php'); </script>";
                                };
                            }
                        ?>
                    </form>
                </tr>
                <tr></tr>
                <tr>
                    <form action='' method='post'>
                        <td></td>
                        <td><input size='3' type='text' name='kitaselect'></td>
                        <td></td>
                        <td><input type='submit' name='kitaupdate' value='Redaguoti'></td>
                        <td><input type='submit' name='kitatempdelete' value='Ištrinti laikinai'></td>
                        <td><input type='submit' name='kitadelete' value='Ištrinti'></td>
                        <?php
                        if(!empty($_POST['kitaselect']) && !empty($_POST['kitadelete'])){
                            deleteTableRow('tbl_kita', $_POST);
                            echo '<meta http-equiv="refresh" content="0">';
                        }
                        ?>
                    </form>
                </tr>
            </table>
        </div>
    </body>
</html>
