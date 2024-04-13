<?php

namespace Kenntcky\BelajarPhpMvc\Controller;

class ProductController
{

    function container(string $productCategory, int $productId)
    {
        echo 'PRODUCT ID : ' . $productId . PHP_EOL . '<br>' . 'PRODUCT CATEGORY : ' . $productCategory . PHP_EOL . '<br>';
    }
    
}