<?php

namespace App\Controllers;

use App\Helpers\DataCompare;
use App\Libs\Database;
use App\Models\Db;
use App\Controllers\ViewsController;
use App\Controllers\FoodController;
use App\Helpers\Inspect;

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
			$food = new FoodController('tbl_maistas');
			$foodData = $food->dbView();
			$food = new FoodController('tbl_kita');
			$foodData = $food->dbView();
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