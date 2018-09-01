<?php
  namespace App\Controllers;

  class HomeController
  {
    public function index($request, $response)
    {
      var_dump($request->getParam('name'));
      return 'home controller';
    }
  }

 ?>
