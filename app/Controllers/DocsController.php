<?php

namespace Yabasi\Controllers;

use Yabasi\Http\Request;
use Yabasi\Http\Response;
use Yabasi\Controller\Controller;

class DocsController extends Controller
{
    public function index(Request $request): Response
    {
        return $this->view('docs');
    }
}