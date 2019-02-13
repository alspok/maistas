<?php

namespace App\Controllers;

use App\Libs\Controller;
use App\Helpers\FormHelper;

// include_once('libs/Controller.php');
// include_once('helpers/FormHelper.php');

class ViewsController extends Controller
{
	public function test()
	{
		$this->view->render('header');
		$this->view->render('content');
		$this->view->render('footer');
		echo 'in ViewsControler after login.';
	}

	public function registration()
	{
		$this->view->render('header');
		$this->view->render('content');
		$this->view->render('registration');		
		$this->view->render('footer');
	}

	public function food()
	{
		$this->view->render('header');
		$this->view->render('content');
		$this->view->render('footer');
		echo 'in ViewsController - Food';
	}
}