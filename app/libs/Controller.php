<?php

namespace App\Libs;

use App\Libs\View;
use App\Helpers\DataCompare;
use App\Controllers;

class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new View;
    }
    
}
