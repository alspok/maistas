<?php

namespace App\Libs;

use App\Libs\View;
// use App\Controller\FoodController;
// use App\Helpers\DataCompare;
// use App\Controllers;

class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new View;
    }
    
    public function setView()
    {
        return $this->view;
    }
}
