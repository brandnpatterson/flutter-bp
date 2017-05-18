<?php

$app->get('/', 'AuthController:getSignIn')->setName('sign-in');
$app->post('/', 'AuthController:postSignIn');

$app->get('/sign-up', 'AuthController:getSignUp')->setName('sign-up');
$app->post('/sign-up', 'AuthController:postSignUp');

$app->get('/sign-out', 'AuthController:getSignOut')->setName('sign-out');

$app->get('/account', 'FlutterController:getFlutter')->setName('account');
$app->post('/account', 'FlutterController:postFlutter');
$app->delete('/account', 'FlutterController:deleteFlutter');
