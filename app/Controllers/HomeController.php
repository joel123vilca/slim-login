<?php
  namespace App\Controllers;

  use \Slim\Views\Twig as View;

  class HomeController extends Controller
  {
    public function index($request, $response)
    {
      $user = $this->db->table('user')->find(1);
      var_dump($user);
      die();
      return $this->view->render($response, 'home.twig');
    }
  }

 ?>
