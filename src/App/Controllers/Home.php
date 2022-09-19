<?php

namespace App\Controllers;

use Core\Controller;
use Core\View;

class Home extends Controller
{
    /**
     * Show the index page
     *
     * @return void
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function indexAction(): void
    {
        View::renderTemplate('Home/index.html', [
            'name' => 'Dave',
            'colors' => ['red', 'green', 'blue'],
        ]);
    }
}
