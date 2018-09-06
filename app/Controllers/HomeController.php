<?php
  namespace App\Controllers;

  use App\Models\User;
  use Slim\Views\Twig as View;

  class HomeController extends Controller
  {
    public function index($request, $response)
    {
       User::create([
         'name'=>'Alex Garret',
        'email'=>'billy@codecourse',
         'password'=>'123',
    ]);
      return $this->view->render($response, 'home.twig');
    }
  }

 ?>
