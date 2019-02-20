<?php

namespace App\Controllers;

use App\Libs\Controller;
// use App\Helpers\FormHelper;
use App\Controllers\FoodController;
// use App\Controllers\DataCompare;

class ViewsController extends Controller
{
	public function logReg()
	{
		$this->view->render('header');
		$this->view->render('content');
		$this->view->render('footer');
	}

	public function food()
	{
		$this->view->render('header');
		$this->view->render('food');
		$this->view->render('footer');
		echo 'in ViewsController - FoodTable';
	}
}