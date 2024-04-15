<?php

namespace Kenntcky\BelajarPhpMvc\Controller;

use Kenntcky\BelajarPhpMvc\App\View;

class ProductController
{

    function container(string $productCategory, int $productId): void
    {
        $model = [
            'title' => 'Product Container',
            'content' => 'PRODUCT ID : ' . $productId . PHP_EOL . '<br>' .
                'PRODUCT CATEGORY : ' . $productCategory . PHP_EOL . '<br>'
        ];

        View::render('Product/container', $model);
    }

}