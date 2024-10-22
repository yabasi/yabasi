<?php

namespace Yabasi\Controllers;

use Yabasi\Container\Container;
use Yabasi\Controller\Controller;
use Yabasi\Http\Request;
use Yabasi\Http\Response;

class BlogController extends Controller
{
    public function __construct(Container $container)
    {
        parent::__construct($container);
    }

    public function index(Request $request): Response
    {
        $data = array(
            'year' => date('Y'),
        );

        return $this->view('blog/index', $data);
    }
}