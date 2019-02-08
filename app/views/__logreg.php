<?php
namespace App\Views;
use App\Controllers;
?>
<!Doctype html>
<html>
    <head>
        <link rel='stylesheet' href='logreg.css'>
    </head>
    <body>
        <h2 style=' text-align: center; padding: 50px'>Maistas login arba registracija</h2>
        <div class='container flex'>
            <div class='log-box'>
                <div style='text-align: center; padding: 2px'><h3>Login</h3></div>
                    <div class='flex'>
                        <form action='log' name='logform' method='post'> 
                            <div><b>Vartotojo vardas:</b><br><input type='text' name='logname'></div>
                            <br>
                            <div><b>Slaptažodis:</b><br><input type='text' name='logpassword'></div>
                            <br>
                            <div><input type='submit' name='logsubmit' value="Įvesti"></div>
                            <?php
                            // if(!empty($_POST['logsubmit'])){
                            //     // logSubmit($_POST);
                            //     $logSubmit = new UsersController;
                            //     $logSubmit->test();
                            // }
                            ?>
                        </form>
                    </div> 
            </div>
            <div class='reg-box'>
                <div style='text-align: center; padding: 2px'><h3>Registracija</h3></div>
                <div class='flex'>
                    <form action='reg' name='regform' method='post'>
                        <div><b>Vartotojo vardas:</b><br><input type='text' name='regname' value=''></div>
                        <br>
                        <div><b>Slaptažodis:</b><br><input type='text' name='regpassword' value=''></div>
                        <br>
                        <div><b>El. pašto adresas:</b><br><input type='text' name='regemail' value=''></div>
                        <br>
                        <div><b>Telefonas:</b><br><input type='text' name='regphone' value=''></div>
                        <br>
                        <div><input type='submit' name='regsubmit' value="Įvesti"></div>
                        <?php
                        // if(!empty($_POST['regsubmit'])){
                        //     // regSubmit($_POST);
                        //     $regSubmit = new UsersController;
                        //     $regSubmit->test()  ;
                        // }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

<?php
function logInput($logData){
    var_dump($logData);
}

function regInput($regData){
    if(isset($regData['regname']) && isset($regData['regpassword']) &&  isset($regData['regmail']) && isset($regData['regphone'])){
            var_dump($_POST);
    }
    else{echo 'empty input';}
}