<?php

require_once('../core/router.php');
#Router config    
$router = new Router();

$RouterConfiguration = [
    #'template_name' => 'path'
    'hi' => '/',
];

$router->Routers($RouterConfiguration);




