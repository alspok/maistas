<?php

// namespace App\Controllers;
namespace App\Libs;

use App\Libs\View;

class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }
    
}
