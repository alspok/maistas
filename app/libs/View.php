<?php

namespace App\Libs;
// namespace App\Controllers;
<<<<<<< HEAD

use App\Libs\Controller;
use App\Controllers;
=======
>>>>>>> 9239ca8d2ef69bf44a2743ed777a6b102aae0d77

class View
{
    private $viewCatalogPath = 'C:/wamp64/www/alspok/maistas/app/views/';

    public function render($templatePath)
    {
        require_once($this->viewCatalogPath . $templatePath . '.php');
    }
}