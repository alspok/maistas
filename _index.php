<!Doctype html>
<?php session_start(); ?>
<html>
    <head>
        <!-- <meta charset='utf8_lithuanian_ci'> -->
        <link rel='stylesheet' href='logreg.css'>
        <?php
            require_once 'logregmain.php';
            // require_once 'class.MySqliHandler.php';
         ?>
    </head>
    <body>
        <h2 style=' text-align: center; padding: 50px'>Maistas login arba registracija</h2>
        <div class='container flex'>
            <div class='log-box'>
                <div style='text-align: center; padding: 2px'><h3>Login</h3></div>
                    <div class='flex'>
                        <form action='' name='logform' method='post'> 
                            <div><b>Vartotojo vardas:</b><br><input type='text' name='logname' value='Rasa'></div>
                            <br>
                            <div><b>Slaptažodis:</b><br><input type='text' name='logpassword' value='123456'></div>
                            <br>
                            <div><input type='submit' name='logsubmit' value="Įvesti"></div>
                            <?php
                            if(isset($_POST['logsubmit'])) logSubmit($_POST);
                            ?>
                        </form>
                    </div> 
            </div>
            <div class='reg-box'>
                <div style='text-align: center; padding: 2px'><h3>Registracija</h3></div>
                <div class='flex'>
                    <form action='' name='regform' method='post'>
                        <div><b>Vartotojo vardas:</b><br><input type='text' name='regname' value=''></div>
                        <br>
                        <div><b>Slaptažodis:</b><br><input type='text' name='regpassword' value=''></div>
                        <br>
                        <div><b>El. pašto adresas:</b><br><input type='text' name='regemail' value=''></div>
                        <br>
                        <div><b>Telefonas:</b><br><input type='text' name='regphone' value=''></div>
                        <br>
                        <div><input type='submit' name='regsubmit' value="Įvesti"></div>
                        <?php if(!empty($_POST['regsubmit'])) regSubmit($_POST); ?>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
