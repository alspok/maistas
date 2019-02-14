<?php

namespace  App\Controllers;
use App\Controllers\FoodController;
use App\Controllers\ViewsController;

class FoodController
{
    public function food()
    {
        $food = new ViewsController;
        $food->foodtable();
    }
}