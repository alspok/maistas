<?php

class FoodDB
{
    public $foodData;

    public function __construct($foodData)
    {
        $this->foodData = $foodData;
    }

    public function foodView()
    {
        foreach($foodData as $food){
            
        }
    }
}