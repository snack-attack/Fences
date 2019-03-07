<?php

require_once './http/Request.php';
require_once './http/Router.php';
require_once './models/Fence.php';

$router = new Router(new Request);

$router->get('/', function() {
    require_once './views/index.view.php';
});

$router->get('/materials', function() {
    require_once './views/materials.view.php';
});

$router->post('/materials', function($request) {
    $request = $request->getBody();
    $fence = new Fence();
    
    $fence->setPosts($request['posts']);
    $fence->setRailings($request['railings']);
    
    $posts = $fence->getPosts();
    $railings = $fence->getRailings();
    
    var_dump($railings);
    var_dump($posts);
});

$router->get('/length', function() {
    require_once './views/length.view.php';
});

$router->post('/length', function() {
    require_once './views/fence.view.php';

    $request = $request->getBody();
    $fence = new Fence();
    
    $fence->setLength($request['length']);
    $length = $fence->getLength();
    
    var_dump($length);
});
