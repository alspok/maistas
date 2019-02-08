<?php

require_once ('vendor/autoload.php');

$errorObject = new App\Controllers\ErrorsController;

if (isset($_SERVER['REQUEST_URI'])) {
  $path = explode('/', $_SERVER['REQUEST_URI']);
  $classFile = '';
  if (isset($path[1])) {
       $classFile = ucfirst($path[4]) . 'Controller';
   }
   if (file_exists('App\Controllers\\' . $classFile . '.php')) {
       $class = 'App\Controllers\\' . $classFile;
       $object = new $class;
       if (!empty($path[5])) {
           $method = $path[5];
           if (method_exists($object, $method)) {
               if (isset($path[6])) {
                   $id = $path[6];
                   $object->$method($id);
               }
               else {
                   $object->$method();
               }
           }
           else $errorObject->error('Error. Method not found.');
       }
       else$object->index();
   }
   else $errorObject->error('Error. Class file not found.');
}
else $errorObject->error('Error. PATH_INFO not found.');
