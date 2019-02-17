<?php

// namespace App\Controllers;
namespace App\Libs;

use App\Controllers\FoodController;

class View
{
    private $viewCatalogPath = 'C:/wamp64/www/alspok/maistas/app/views/';

    public function render($templatePath)
    {
        require_once($this->viewCatalogPath . $templatePath . '.php');
    }
}