<?php 

namespace App\Controllers;

use App\Libs\Database;
use App\Helpers\FormHelper;
use App\Helpers\DataCompare;
use App\Libs\Controller;
use App\Libs\View;
use App\Models\Db;

class FoodController extends Controller
{
	public $tableName;

	public function __construct($tableName)
	{
		$this->tableName = $tableName;
	}
	
	public function dbView()
	{
		$db = new Database;
		$dbData = $db->select()->from($this->tableName)->get();
		var_dump($dbData);
	}

    public function foodTable()
	{
		
		$this->view->render('header');
		$this->view->render('content');
		$this->view->render('food');
		$this->view->render('footer');
	}
}
