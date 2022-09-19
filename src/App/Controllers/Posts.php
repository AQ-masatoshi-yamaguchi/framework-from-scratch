<?php

namespace App\Controllers;

use Core\Controller;
use Core\View;

class Posts extends Controller
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
        View::renderTemplate('Posts/index.html');
    }

    /**
     * Show the add new page
     *
     * @return void
     */
    public function addNewAction(): void
    {
        echo 'Hello from the addNew action in the Posts controller!';
    }

    /**
     * Show the edit page
     *
     * @return void
     */
    public function editAction()
    {
        echo 'Hello from the edit action in the Posts controller!';
        echo '<p>Route parameters: <pre>' .
            htmlspecialchars(print_r($this->route_params, true)) . '</pre></p>';
    }
}
