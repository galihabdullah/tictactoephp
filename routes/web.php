<?php

use App\Controllers\HomeController;
use App\Controllers\MainController;

$app->get('/', HomeController::class . ':index');
$app->post('/room/{name}', MainController::class . ':createRoom');
$app->post('/room/{roomname}/{name}', MainController::class . ':entryRoom');
$app->post('/room/{roomname}/{name}/{row}/{column}', MainController::class . ':givePosition');
$app->get('/v1/docs', function ($request, $response, $args) {
    $dir = __DIR__ . '/../app/Controllers'; // Scan Controller folder
    $swagger = \Swagger\scan([$dir]);
    $response->write($swagger);
    $response = $response->withHeader('Content-Type', 'application/json');
    return $response;
});