<?php

// namespace App\Controllers;
namespace App\Libs;

use App\Libs\View;

class View
{
    private $viewCatalogPath = 'C:/wamp/www/alspok/maistas/app/views/';

    public function render($templatePath)
    {
        require_once($this->viewCatalogPath . $templatePath . '.php');
    }
}