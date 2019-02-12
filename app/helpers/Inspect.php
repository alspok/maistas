<?php

namespace App\Helpers;

use App\Controllers;
use App\Helpers;

class Inspect
{
    public $userData = [];
    public $bollean = FALSE;

    public function __construct($userData)
    {
        $this->userData = $userData;
    }

    public function isEmpty()
    {
        foreach($this->userData as $item){
            if(empty($item)){
                $this->bollean = TRUE;
                return $this->bollean;
            }
        }
    }
    
}