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
		$boolean = $compare->dataCompare();

		if($boolean){
			$dbView = new ViewsController();
			$dbView->test();
		}
		else echo 'Login failed, try again.';
	}

	public function reg()
	{
		$regData = $_POST;
		
		$tblData = new DataCompare('tbl_logreg', $regData);
		$tblData->getDbTable();
		if($tblData->dataCompare()){
			$DB = new Database();
			$q = $DB->insert('tbl_mvc_users')->column('name, password, email, activity')->values('"' . $regData['regname'] . '","' . $regData['regpass'] . '","' . $regData['regemail'] . '","'. TRUE . '"')->getQuery();
			$DB->connect()->putData();
			echo 'Registration OK';
		}
		else{
			echo 'Already registred. Please login.';
		}
	}

}