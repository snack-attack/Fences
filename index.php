<?php

require_once './http/Request.php';
require_once './http/Router.php';
require_once './models/Fence.php';

function render($file, array $data) {
    require_once "./views/" . $file . ".view.php";
}

$router = new Router(new Request);
$fence = new FenceBuilder();

$router->get('/', function() {
    require_once './views/index.view.php';
});

$router->get('/materials', function() {
    require_once './views/materials.view.php';
});

$router->post('/materials', function($request) {
    $request = $request->getBody();
    $fence = new FenceBuilder();
    
    $fence->setPosts($request['posts']);
    $fence->setRailings($request['railings']);
    
    $posts = $fence->getPosts();
    $railings = $fence->getRailings();

    $length = $fence->caluclateLength($posts, $railings);
    $finalPosts = $fence->calculatePosts($length);
    $finalRailings = $fence->calculateRailings($length);

    $data = ["length" => $length, "posts" => $finalPosts, "railings" => $finalRailings];
    
    return render('fence', $data);
    
});

$router->get('/length', function() {
    require_once './views/length.view.php';
});

$router->post('/length', function($request) {
    $request = $request->getBody();
    $fence = new FenceBuilder();
    
    $fence->setLength($request['length']);
    $length = $fence->getLength();
    $posts = $fence->calculatePosts($length);
    $railings = $fence->calculateRailings($length);
    $finalLength = $fence->caluclateLength($posts, $railings);

    $data = ["length" => $finalLength, "posts" => $posts, "railings" => $railings];
    
    return render('fence', $data);
    
});
