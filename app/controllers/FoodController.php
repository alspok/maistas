<?php

namespace  App\Controllers;

use App\Controllers\ViewsController;

class FoodController
{
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
    
}