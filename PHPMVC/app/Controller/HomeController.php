<?php

namespace Kenntcky\BelajarPhpMvc\Controller;

use Kenntcky\BelajarPhpMvc\App\View;

class HomeController
{
    function index(): void
    {
        $model = [
            'title' => 'Belajar PHP MVC',
            'content' => 'Terima kasih PZN telah memberikan ilmu'
        ];

        View::render('Home/index', $model);
    }
}