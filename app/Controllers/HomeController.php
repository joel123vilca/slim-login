<?php
  namespace App\Controllers;

  use App\Models\User;
  use Slim\Views\Twig as View;

  class HomeController extends Controller
  {
    public function index($request, $response)
    {

      User::create([
        'name'=>'joel',
        'email'=>'joel@gmail.com',
        'password'=>'12345',
      ]);

      return $this->view->render($response, 'home.twig');
    }
  }

 ?>
