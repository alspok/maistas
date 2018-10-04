<<<<<<< HEAD
<!DOCUNENT html>

<html>
    <head>
        <title>Alspok Maistas</title>
        <link rel='stylesheet' href='maistasstyle.css'>
        <?php
        require_once('action(1).php');
        require_once('_classLoad.php');
        _classLoad('mysqlhandler');
        ?>
    </head>
    <body>
        <h2 style='color:blue'>Maistas</h2>
        <form action=''  method='post'>
            <table class='table'>
                <thead class='th'>
                    <tr>
                        <th>Nr</th><th>Prekė</th><th>Kiekis</th><th>Pastabos</th><th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php loadTable('tb_maistas'); ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td></td>
                        <td><input type='text' name='prk'> </td>
                        <td><input type='text' name='kks' size='10'></td>
                        <td><input type='text' name='pstbs'></td>
                        <td><input type='submit' name='maistasinsert' value='Įvesti'></td>
                        <?php if(!empty($_POST['maistasinsert'])){ insertTableRow('tb_maistas', $_POST); header("Refresh:0");} ?>
                    </tr>
                </tfoot>
            </table>
            <br>
            <input size='4' type='text' name='delete'>
            <input type='button' name='maistasupdate' value='Redaguoti'>
            <input type='button' name='maistastempdelete' value='Ištrinti laikinai'>
            <input type='button' name='maistasdelete' value='Ištrinti'>
            <?php deleteTableRow('tb_maistas', $_POST); ?>
        </form>
       
        <h2 style='color:blue'>Kita</h2>
        <form action='' method='post'>
            <table class='table'>
                <thead class='th'>
                    <tr>
                        <th>Nr</th><th>Prekė</th><th>Kiekis</th><th>Pastabos</th><th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php loadTable('tb_kita'); ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td></td>
                        <td><input type='text' name='prk'> </td>
                        <td><input type='text' name='kks' size='10'></td>
                        <td><input type='text' name='pstbs'></td>
                        <td><input type='submit' name='kitainsert' value='Įvesti'></td>
                        <?php if(!empty($_POST['kitainsert'])){ insertTableRow('tb_kita', $_POST); header("Refresh:0");} ?>
                    </tr>
                </tfoot>
            </table>
            <br>
            <input size='4' type='text' name='delete'>
            <input type='button' name='kitasupdate' value='Redaguoti'>
            <input type='button' name='kitastempdelete' value='Ištrinti laikinai'>
            <input type='button' name='kitasdelete' value='Ištrinti'>
            <?php deleteTableRow('tb_kita', $_POST); ?>
        </form>
    </body>
</html>

=======
<!DOCUNENT html>

<html>
    <head>
        <title>Alspok Maistas</title>
        <link rel='stylesheet' href='maistasstyle.css'>
        <?php
        require_once('action(1).php');
        require_once('_classLoad.php');
        _classLoad('mysqlhandler');
        ?>
    </head>
    <body>
        <h2 style='color:blue'>Maistas</h2>
        <form action=''  method='post'>
            <table class='table'>
                <thead class='th'>
                    <tr>
                        <th>Nr</th><th>Prekė</th><th>Kiekis</th><th>Pastabos</th><th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php loadTable('tb_maistas'); ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td></td>
                        <td><input type='text' name='prk'> </td>
                        <td><input type='text' name='kks' size='10'></td>
                        <td><input type='text' name='pstbs'></td>
                        <td><input type='submit' name='maistasinsert' value='Įvesti'></td>
                        <?php if(!empty($_POST['maistasinsert'])){ insertTableRow('tb_maistas', $_POST); header("Refresh:0");} ?>
                    </tr>
                </tfoot>
            </table>
            <br>
            <input size='4' type='text' name='delete'>
            <input type='button' name='maistasupdate' value='Redaguoti'>
            <input type='button' name='maistastempdelete' value='Ištrinti laikinai'>
            <input type='button' name='maistasdelete' value='Ištrinti'>
            <?php deleteTableRow('tb_maistas', $_POST); ?>
        </form>
       
        <h2 style='color:blue'>Kita</h2>
        <form action='' method='post'>
            <table class='table'>
                <thead class='th'>
                    <tr>
                        <th>Nr</th><th>Prekė</th><th>Kiekis</th><th>Pastabos</th><th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php loadTable('tb_kita'); ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td></td>
                        <td><input type='text' name='prk'> </td>
                        <td><input type='text' name='kks' size='10'></td>
                        <td><input type='text' name='pstbs'></td>
                        <td><input type='submit' name='kitainsert' value='Įvesti'></td>
                        <?php if(!empty($_POST['kitainsert'])){ insertTableRow('tb_kita', $_POST); header("Refresh:0");} ?>
                    </tr>
                </tfoot>
            </table>
            <br>
            <input size='4' type='text' name='delete'>
            <input type='button' name='kitasupdate' value='Redaguoti'>
            <input type='button' name='kitastempdelete' value='Ištrinti laikinai'>
            <input type='button' name='kitasdelete' value='Ištrinti'>
            <?php deleteTableRow('tb_kita', $_POST); ?>
        </form>
    </body>
</html>

>>>>>>> 1431887597ee621dcf64a7b8240ac3e881494127
