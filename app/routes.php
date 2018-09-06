<?php

// $app->get('/home', function($request, $response){
//   return $this->view->render($response, 'home.twig');
// });

$app->get('/','HomeController:index');

$app->get('/auth/signup','AuthController:getSignUp')->setName('auth.signup');
$app->post('/auth/signup','AuthController:postSignUp');
 ?>
