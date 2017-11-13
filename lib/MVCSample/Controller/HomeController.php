<?php

namespace MVCSample\Controller;

use WordpressMVC\Controller;
use WordpressMVC\ViewModel;

class HomeController extends Controller
{
    public function index ()
    {
        $view = new ViewModel([
            'colours' => ['red', 'blue', 'green'],
        ]);
        $view->setTemplate(MVCSAMPLE_VIEWS . '/home.phtml');
        return $view;
    }

    public function sample ()
    {
        $view = new ViewModel([
            'colours' => ['magenta', 'cyan', 'yellow'],
        ]);
        $view->setTemplate(MVCSAMPLE_VIEWS . '/home.phtml');
        return $view;
    }
}
