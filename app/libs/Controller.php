<?php

// namespace App\Controllers;
namespace App\Libs;

use App\Libs\View;
use App\Helpers\DataCompare;

class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new View;
    }
    
}
