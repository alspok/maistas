<?php
namespace App\Helpers;
use App\Controllers\UsersController;
?>

<h1>Maistas</h1>
<h4>Prisijungimas</h4>
<?php
$form = new FormHelper('POST', '');
$form->h5('Vardas:');
$form->input(['name' => 'logemail', 'type' => 'text', 'placeholder' => ''])->break();
$form->h5('Slaptažodis:');
$form->input(['name' => 'logpass', 'type' => 'password', 'placeholder' => ''])->break()->break();
$form->input(['name' => 'logsubmit', 'type' => 'submit', 'placeholder' => 'Login']);
$form->break()->break();
echo $form->get();
?>

<h4>Registracija</h4>
<?php
$form = new FormHelper('POST', '');
$form->h5('Vardas:');
$form->input(['name' => 'regname', 'type' => 'text', 'placeholder' => '']);
$form->h5('El. pašto adresas:');
$form->input(['name' => 'regemail', 'type' => 'text', 'placeholder' => '']);
$form->h5('Slaptažodis:');
$form->input(['name' => 'regpass', 'type' => 'password', 'placeholder' => '']);
$form->h5('Patvirtinti slaptažodį:');
$form->input(['name' => 'regconfpass', 'type' => 'password', 'placeholder' => '']);
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