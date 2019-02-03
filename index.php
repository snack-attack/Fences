<?php

include_once './http/Request.php';
include_once './http/Router.php';
include_once "./models/Fence.php";
include_once "./views/index.view.php";

$router = new Router(new Request);

$router->post('/index.php', function($request) {
    $request = $request->getBody();
    $fence = new Fence();
    $length = $fence->setLength($request['length']);
    var_dump($length);
});