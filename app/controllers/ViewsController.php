<?php

namespace App\Controllers;

use App\Libs\Controller;
<<<<<<< HEAD
use App\Helpers\FormHelper;
use App\Controllers\FoodController;
use App\Controllers\DataCompare;
=======
// use App\Helpers\FormHelper;
// use App\Controllers\FoodController;
// use App\Controllers\DataCompare;
>>>>>>> 9239ca8d2ef69bf44a2743ed777a6b102aae0d77

class ViewsController extends Controller
{
	public function logReg()
	{
		$this->view->render('header');
		$this->view->render('content');
		$this->view->render('footer');
<<<<<<< HEAD
	}

=======

		$logReg = new UsersController;
		if(isset($_POST['logsubmit'])) $logReg->log();
		if(isset($_POST['regsubmit'])) $logReg->reg();
	}

>>>>>>> 9239ca8d2ef69bf44a2743ed777a6b102aae0d77
	public function food()
	{
		$this->view->render('header');
		$this->view->render('food');
		$this->view->render('footer');
		echo 'in ViewsController - FoodTable';
	}
}