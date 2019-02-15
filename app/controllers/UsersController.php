<?php

namespace App\Controllers;

use App\Helpers\DataCompare;
use App\Libs\Database;
use App\Models\Db;
use App\Controllers\ViewsController;
use App\Controllers\FoodController;
use App\Helpers\Inspect;
use App\Controllers\Foodcontroller;

class UsersController{
	
	public $queryString = '';

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
		$this->queryString = $query->select()->from('tbl_logreg')->getQuery();
		
		$db = new Db($this->queryString);
		$result = $db->connect()->getData();

		$compare = new DataCompare($result, $logData);
		$boolean = $compare->logDataCompare();

		if($boolean){
<<<<<<< HEAD
			$food = new FoodController;
			$food->dbView();
=======
			header('Location: food');
			$food = new FoodController;
			$food->food();
>>>>>>> e74a7c2e21c85980cbb80d1d396c3e1f96197805
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
		$this->queryString = $query->select()->from('tbl_logreg')->getQuery();

		$db = new Db($this->queryString);
		$result = $db->connect()->getData();

		
		$compare = new DataCompare($result, $regData);
		$boolean = $compare->regDataCompare();

		if($boolean){
			echo 'Alredy registered. Please login.';
		}
		else{
			$query = new Database();
			$this->queryString = $query->insert('tbl_logreg')->column('name, password, email, phone, activity')->values('"' . $regData['name'] . '",' . '"' . $regData['password'] . '",' . '"' . $regData['email'] . '",' . '"' . $regData['phone'] . '",' . '"' . TRUE . '"')->getQuery();

			$db = new Db($this->queryString);
			$db->connect()->putData();
			echo 'Registration OK';
			
		}
	}

}