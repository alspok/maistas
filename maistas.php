<!DOCUNENT html>
<html>
    <head>
        <title>Alspok Maistas</title>
        <!-- <meta charset='utf8_lithuanian_ci'> -->
        <link rel='stylesheet' href='maistas.css'>
        <?php
            require_once('class.mysqlhandler.php');
            require_once('maistasmain.php');
        ?>
    </head>
    <body>
        <!-- Maistas table -->
        <h2>Maistas</h2>
        <div class='flex-center'>
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
                            if(isset($_POST['maistas']) && isset($_POST['maistaspreke']) && isset($_POST['maistaskiekis'])){
                            insertTableRow('db_alspok_maistas', 'tbl_maistas');
                            echo '<meta http-equiv="refresh" content="0">';
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
                        <td><input type='submit' name='maistaschange' value='Ištrinti'></td>
                        <?php
                        if(isset($_POST['maistasselect']) && isset($_POST['maistaschange'])){
                            deleteTableRow('db_alspok_maistas', 'tbl_maistas');
                            echo '<meta http-equiv="refresh" content="0">';
                        }
                        ?>
                    </form>
                </tr>
            </table>
        </div>
        
        <!-- Kita table -->
        <h2>Kita</h2>
        <div class='flex-center'>
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
                        <td></td>
                        <td><input type='text' name='kitapreke'> </td>
                        <td><input type='text' name='kitakiekis'></td>
                        <td><input type='text' name='kitapastabos'></td>
                        <td><input type='submit' name='kita' value='Įvesti'></td>
                        <?php
                            if(isset($_POST['kita']) && isset($_POST['kitapreke']) && isset($_POST['kitakiekis'])){
                            insertTableRow('db_alspok_maistas', 'tbl_kita');
                            echo '<meta http-equiv="refresh" content="0">';
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
                        <td><input type='button' name='kitasupdate' value='Redaguoti'></td>
                        <td><input type='button' name='kitastempdelete' value='Ištrinti laikinai'></td>
                        <td><input type='button' name='kitasdelete' value='Ištrinti'></td>
                    </form>
                </tr>
            </table>
        </div>
    </body>
</html>
