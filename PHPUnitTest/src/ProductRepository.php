<?php

namespace Kenntcky\BelajarPhpUnitTest;

interface ProductRepository
{
    function save(Product $product): Product;

    function delete(Product $product): void;

    function findById(int $id): ?Product;

    function findALl(): array;

}