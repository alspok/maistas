<?php

namespace App\Controllers;

use App\Helpers\DataCompare;
use App\Libs\Database;
use App\Models\Db;
use App\Controllers\ViewsController;

class UsersController{
	
	public function test()
	{
		echo 'in UsersController class';
	}

	public function log()
	{
		$logData = $_POST;

		$query = new Database();
		$queryString = $query->select()->from('tbl_logreg')->getQuery();
		
		$db = new Db($queryString);
		$result = $db->connect()->getData();

		$compare = new DataCompare($result, $logData);
		$boolean = $compare->logDataCompare();

		if($boolean){
			$dbView = new ViewsController();
			$dbView->test();
		}
		else echo 'Login failed, try again.';
	}

	public function reg()
	{
		$regData = $_POST;

		$query = new Database();
		$queryString = $query->select()->from('tbl_logreg')->getQuery();

		$db = new Db($queryString);
		$result = $db->connect()->getData();

		
		$compare = new DataCompare('tbl_logreg', $regData);
		$boolean = $compare->regDataCompare();

		if($boolean){

		}
		else{
			echo 'Already registred. Please login.';
		}
	}

}