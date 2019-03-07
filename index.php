<?php

require_once './http/Request.php';
require_once './http/Router.php';
require_once './models/Fence.php';

$router = new Router(new Request);

$router->post('/', function($request) {
    require_once './views/index.view.php';

    $request = $request->getBody();
    $fence = new Fence();
    
    $fence->setLength($request['length']);
    $fence->setPosts($request['posts']);
    $fence->setRailings($request['railings']);
    
    $length = $fence->getLength();
    $posts = $fence->getPosts();
    $railings = $fence->getRailings();
});

$router->get('/', function() {
    return <<<HTML
    <h1>Hello world</h1>
HTML;
});