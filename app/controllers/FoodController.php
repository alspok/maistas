<?php 

namespace App\Controllers;

use App\Libs\Database;
use App\Libs\View;
use App\Libs\Controller;

class FoodController extends Controller
{
	public $tableName;
	public $tableData;
<<<<<<< HEAD

=======
	
>>>>>>> 9239ca8d2ef69bf44a2743ed777a6b102aae0d77
	public function __construct($tableName)
	{
		$this->tableName = $tableName;
	}
	
	public function dbView()
	{
<<<<<<< HEAD
		$v = new View;
		$db = new Database;
		$this->tableData = $db->select()->from($this->tableName)->get();
		$this->view->render('header');
		var_dump($this->tableData);
		$this->view->render('footer');

=======
		// $view = new View;
		$db = new Database;
		$this->tableData = $db->select()->from($this->tableName)->get();

		$this->view->render('header');
		var_dump($this->tableData);
		$view->render('footer');
>>>>>>> 9239ca8d2ef69bf44a2743ed777a6b102aae0d77
	}
}
