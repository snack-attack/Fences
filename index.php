<?php

include_once './http/Request.php';
include_once './http/Router.php';
include_once "./models/Fence.php";
include_once "./views/index.view.php";

$router = new Router(new Request);

// $router->get('/', function() {
// return <<<HTML
// <h1>Hello world</h1>
// HTML;
// });

// $router->get('/fence', function($request) {
// return <<<HTML
// <h1>Profile</h1>
// HTML;
// });

$router->post('/index.php', function($request) {
return json_encode($request->getBody());
});