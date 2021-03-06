<?php
  namespace App\Controllers\Auth;
  use App\Models\User;
  use App\Controllers\Controller;


  class AuthController extends Controller
  {
      public function getSignUp($request, $response)
      {
        return $this->view->render($response, 'auth/signup.twig');
      }
      public function PostSignUp($request, $response)
      {
        User::create([
          'email'=>$request->getParam('email'),
          'name'=> $request->getParam('name'),
          'password'=>password_hash($request->getParam('password'),PASSWORD_DEFAULT),
        ]);
        return $response->withRedirect($this->router->pathFor('home'));
      }
  }

 ?>
