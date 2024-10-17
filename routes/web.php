<?php

use Yabasi\Routing\Router;

return function (Router $router)
{
    $router->get('/', 'IndexController@index');
};