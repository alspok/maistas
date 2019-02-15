<?php

namespace  App\Controllers;
<<<<<<< HEAD

=======
use App\Controllers\FoodController;
>>>>>>> e74a7c2e21c85980cbb80d1d396c3e1f96197805
use App\Controllers\ViewsController;

class FoodController
{
<<<<<<< HEAD
    public function __construct()
    {
        echo '<br>in FoodController</br>';
    }
    
    public function index()
    {
        echo '<br>in FoodController index method</br>';
    }

    public function dbView()
    {
        $dbView = new ViewsController();
	    $dbView->food();
    }
    
=======
    public function food()
    {
        $food = new ViewsController;
        $food->foodtable();
    }
>>>>>>> e74a7c2e21c85980cbb80d1d396c3e1f96197805
}