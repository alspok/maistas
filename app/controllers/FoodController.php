<?php

namespace  App\Controllers;
use App\Controllers\ViewsController;

use App\Libs\Database;
use App\Helpers\FormHelper;
use App\Helpers\DataCompare;
use App\Libs\Controller;
use App\Libs\Views;
use App\Models\Db;

class FoodController
{
    public function __construct()
    {
        echo '<br>in FoodController</br>';
    }

    public function logreg()
	{
		$this->view->render('header');
		$this->view->render('content');
		// $this->view->render('logreg');
		$this->view->render('footer');
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