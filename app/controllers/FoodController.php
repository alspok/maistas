<?php 

namespace App\Controllers;

use App\Libs\Database;
// use App\Libs\View;
use App\Libs\Controller;

class FoodController extends Controller
{
	public $tableName;
	public $tableData;
	
	public function __construct($tableName)
	{
		$this->tableName = $tableName;
	}
	
	public function dbView()
	{
		// $view = new View;
		$db = new Database;
		$this->tableData = $db->select()->from($this->tableName)->get();

		$this->view->render('header');
		var_dump($this->tableData);
		$view->render('footer');
	}
}
