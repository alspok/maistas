<?php
namespace App\Helpers;

use App\Libs\Database;
use App\Models\Db;

class DataCompare
{
	public $userData;
	public $dbData;
	public $compare;

	public function __construct($dbData, $userData)
	{
		$this->dbData = $dbData;
		$this->userData = $userData;
	}

	public function dataCompare()
	{
		$this->compare = FALSE;

		foreach($this->dbData as $dbItem){
			if($dbItem['activity'] == 0) continue;
			if($dbItem['email'] === $this->userData['email'] && $dbItem['password'] === $this->userData['password']){
				$this->compare = TRUE;
				break;
			}
		}

		return $this->compare;
	}
}