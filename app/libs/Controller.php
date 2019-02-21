<?php

namespace App\Libs;

use App\Libs\View;
<<<<<<< HEAD
use App\Helpers\DataCompare;
use App\Controllers;
=======
// use App\Controller\FoodController;
// use App\Helpers\DataCompare;
// use App\Controllers;
>>>>>>> 9239ca8d2ef69bf44a2743ed777a6b102aae0d77

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
