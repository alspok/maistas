<<<<<<< HEAD
<?php

function _classLoad($className){

    $filePath = dirname(dirname(__FILE__)) . '\classfolder\class.' . $className . '.php';
    require_once($filePath);
=======
<?php

function _classLoad($className){

    $filePath = dirname(dirname(__FILE__)) . '\classfolder\class.' . $className . '.php';
    require_once($filePath);
>>>>>>> 1431887597ee621dcf64a7b8240ac3e881494127
}