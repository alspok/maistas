<?php

namespace App\Controllers;

class UsersController{
	
	public function test()
	{
		echo 'in UsersController class';
	}

	public function log()
	{
		echo 'in log';
		$query = new Database();
		$queryString = $query->select()->from('tbl_mvc_users');
		$dbInspect = new DataCompare($query, $_POST);
		$dbInspect->getDbTable();
	}

	public function reg()
	{
		$regData = $_POST;
		
		$tblData = new DataCompare('tbl_mvc_users', $regData);
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