<?php 

namespace App\Controllers;

use App\Libs\Database;
use App\Helpers\FormHelper;
use App\Helpers\DataCompare;
use App\Libs\Controller;
use App\Libs\View;
// use App\Models\Db;

class PostsController extends Controller
{
    public function logreg()
	{
		
		$this->view->render('header');
		$this->view->render('content');
		// $this->view->render('logreg');
		$this->view->render('footer');

		
	}
}