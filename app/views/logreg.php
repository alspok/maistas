<?php
namespace App\Helpers;
use App\Controllers\UsersController;
?>

<h1>Maistas</h1>
<h4>Prisijungimas</h4>
<?php
$form = new FormHelper('POST', '');
$form->h5('El.paštas:');
$form->input(['name' => 'email', 'type' => 'text', 'placeholder' => ''])->break();
$form->h5('Slaptažodis:');
$form->input(['name' => 'password', 'type' => 'password', 'placeholder' => ''])->break()->break();
$form->input(['name' => 'logsubmit', 'type' => 'submit', 'placeholder' => 'Login']);
$form->break()->break();
echo $form->get();
?>

<h4>Registracija</h4>
<?php
$form = new FormHelper('POST', '');
$form->h5('Vardas:');
$form->input(['username' => 'username', 'type' => 'text', 'placeholder' => '']);
$form->h5('El. pašto adresas:');
$form->input(['name' => 'email', 'type' => 'text', 'placeholder' => '']);
$form->h5('Slaptažodis:');
$form->input(['name' => 'password', 'type' => 'password', 'placeholder' => '']);
$form->h5('Patvirtinti slaptažodį:');
$form->input(['name' => 'confpassword', 'type' => 'password', 'placeholder' => '']);
$form->h5('Telefonas:');
$form->input(['name' => 'phone', 'type' => 'text', 'placeholder' => ''])->break()->break();
$form->input(['name' => 'regsubmit', 'type' => 'submit', 'placeholder' => 'Register'])->break()->break();
echo $form->get();
?>

<?php
if(isset($_POST['logsubmit'])){
    $logData = new UsersController;
    $logData->log();
}

if(isset($_POST['regsubmit'])){
    $regData = new UsersController;
    $regData->reg();
}