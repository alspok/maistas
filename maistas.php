<!DOCUNENT html>
<html>
    <head>
        <title>Alspok Maistas</title>
        <link rel='stylesheet' href='maistasstyle.css'>
        <?php require_once ('class.mysqlhandler.php')
    </head>
    <body>
        <form action='' method=post>
            <h2 style='color:blue'>Maistas</h2>
            <table class='table'>
                <thead class='th'>
                    <tr>
                        <th width='50'>Id</th><th>Nr</th><th>Prekė</th><th>Kiekis</th><th>Pastabos</th><th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td></td>
                        <td><input type='text' name='maistaspreke'> </td>
                        <td><input type='text' name='maistaskiekis' size='10'></td>
                        <td><input type='text' name='maistaspastabos'></td>
                        <td><input type='submit' name='maistas' value='Įvesti'></td>
                        <?php
                            if(isset($_POST['maistas']) && isset($_POST['maistaspreke']) && isset($_POST['maistaskiekis'])){
                            insertTableRow('db_alspok_maistas', 'tbl_maistas');
                            echo '<meta http-equiv="refresh" content="0">';
                            }
                        ?>
                    </tr>
                </tfoot>
            </table>
            <br>
            <input size='6' type='text' name='maistasselect'>
            <input type='submit' name='maistasupdate' value='Redaguoti'>
            <input type='submit' name='maistastempdelete' value='Ištrinti laikinai'>
            <input type='submit' name='maistaschange' value='Ištrinti'>
            <?php
            if(isset($_POST['maistasselect']) && isset($_POST['maistaschange'])){
                deleteTableRow('db_alspok_maistas', 'tbl_maistas');
                echo '<meta http-equiv="refresh" content="0">';
            }
            ?>
        </form>

        <form action='index.php' method='post'>
            <h2 style='color:blue'>Kita</h2>
            <table class='table'>
                <thead class='th'>
                    <tr>
                        <th width='50'>Id</th><th>Nr</th><th>Prekė</th><th>Kiekis</th><th>Pastabos</th><th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php loadAllTable('db_alspok_maistas', 'tbl_kita'); ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td></td>
                        <td><input type='text' name='kitapreke'> </td>
                        <td><input type='text' name='kitakiekis' size='10'></td>
                        <td><input type='text' name='kitapastabos'></td>
                        <td><input type='submit' name='kita' value='Įvesti'></td>
                        <?php
                            if(isset($_POST['kita']) && isset($_POST['kitapreke']) && isset($_POST['kitakiekis'])){
                            insertTableRow('db_alspok_maistas', 'tbl_kita');
                            echo '<meta http-equiv="refresh" content="0">';
                            }
                        ?>
                    </tr>
                </tfoot>
            </table>
            <br>
            <input size='6' type='text' name='kitachange'>
            <input type='button' name='kitasupdate' value='Redaguoti'>
            <input type='button' name='kitastempdelete' value='Ištrinti laikinai'>
            <input type='button' name='kitasdelete' value='Ištrinti'>
            
        </form>
    </body>
</html>
