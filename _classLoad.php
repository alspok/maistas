<?php

function _classLoad($className){

    $filePath = dirname(dirname(__FILE__)) . '\classfolder\class.' . $className . '.php';
    require_once($filePath);
}