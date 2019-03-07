<?php

include_once './http/Request.php';
include_once './http/Router.php';
include_once './models/Fence.php';
include_once './views/index.view.php';

$router = new Router(new Request);

$router->post('/index.php', function($request) {
    $request = $request->getBody();
    $fence = new Fence();

    $fence->setLength($request['length']);
    $fence->setPosts($request['posts']);
    $fence->setRailings($request['railings']);

    $length = $fence->getLength();
    $posts = $fence->getPosts();
    $railings = $fence->getRailings();

    var_dump($railings);
    var_dump($posts);
    var_dump($length);
});

$router->get('/', function() {
    return <<<HTML
    <h1>Hello world</h1>
HTML;
});