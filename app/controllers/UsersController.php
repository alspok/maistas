<?php

namespace App\Controllers;

use App\Helpers\DataCompare;
use App\Libs\Database;
use App\Models\Db;
use App\Controllers\ViewsController;
use App\Helpers\Inspect;

class UsersController{
	
	public function test()
	{
		echo 'in UsersController class';
	}

	public function log()
	{
		$logData = $_POST;

		$emptyItem = new Inspect($logData);
		if($emptyItem->isEmpty()){
			exit ('<script>alert("Enter all fields.")</script>');
		}

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
		else{
			exit ('<script>alert("Login failed. Try again.")</script>');
		} 
	}

	public function reg()
	{
		$regData = $_POST;

		$emptyItem = new Inspect($regData);
		if($emptyItem->isEmpty()){
			exit ('<script>alert("Enter all fields.")</script>');
		}

		$query = new Database();
		$queryString = $query->select()->from('tbl_logreg')->getQuery();

		$db = new Db($queryString);
		$result = $db->connect()->getData();

		
		$compare = new DataCompare('tbl_logreg', $regData);
		$boolean = $compare->regDataCompare();

		if($boolean){
			echo 'Alredy registered. Please login.';
		}
		else{
			$query = new Databaase();
			$queryString = $query->insert('tbl_logreg')->column('name, password, email, phone, activity')->values($regData['name'], $regData['password'], $regData['email'], $regData['phone'], TRUE);

			$db = new Db($queryString);
			$db->connect()->putData();
			echo 'Registration OK';
		}
	}

}