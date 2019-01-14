<?php
function _classLoad($className){

    $filePath = dirname(dirname(__FILE__)) . '\maistas\class.' . $className . '.php';
    require_once($filePath);
}