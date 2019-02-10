<?php

namespace App\Controllers;

use App\Helpers\DataCompare;
use App\Libs\Database;

class UsersController{
	
	public function test()
	{
		echo 'in UsersController class';
	}

	public function log()
	{
		echo 'in log';
		$db = new Database();
		$dbData = $db->select()->from('tbl_logreg')->getQuery()->connect()->get();
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