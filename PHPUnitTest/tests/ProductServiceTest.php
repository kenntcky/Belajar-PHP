<?php

namespace Kenntcky\BelajarPhpUnitTest;

use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

class ProductServiceTest extends TestCase
{
    private ProductRepository $repository;
    private ProductService $service;

    public function setUp(): void
    {

//        USING STUB:
//        $this->repository = $this->createStub(ProductRepository::class);
//        $this->service = new ProductService($this->repository);

        $this->repository = $this->createMock(ProductRepository::class);
        $this->service = new ProductService($this->repository);
    }

    public function testStub()
    {
        $product = new Product();
        $product->setId(1);

        $this->repository->method("findById")
            ->willReturn($product);

        $result = $this->repository->findById(1);

        self::assertEquals($product, $result);
    }

    public function testStubMap()
    {
        $product1 = new Product();
        $product1->setId(1);

        $product2 = new Product();
        $product2->setId(2);

        $product3 = new Product();
        $product3->setId(3);

        $map = [
            [1, $product1],
            [2, $product2],
            [3, $product3]
        ];

        $this->repository->method("findById")
            ->willReturnMap($map);

        self::assertEquals($product1, $this->repository->findById(1));
        self::assertEquals($product2, $this->repository->findById(2));
        self::assertEquals($product3, $this->repository->findById(3));
    }

    public function testStubCallback()
    {
        $this->repository->method("findById")
            ->willReturnCallback(function (int $id) {
                $product = new Product();
                $product->setId($id);
                return $product;
            });

        assertEquals(1, $this->repository->findById(1)->getId());
        assertEquals(2, $this->repository->findById(2)->getId());
    }

    public function testRegister()
    {
        $this->repository->method("findById")->willReturn(null);
        $this->repository->method("save")->willReturnArgument(0);

        $product = new Product();
        $product->setId(1);
        $product->setName("Pisang Molen");
        $product->setDescription("Makanan satu ini sangat enak lo, real");

        $result = $this->service->register($product);

        assertEquals($product->getId(), $result->getId());
        assertEquals($product->getName(), $result->getName());
        assertEquals($product->getDescription(), $result->getDescription());
    }

    public function testRegisterError()
    {
        $this->expectException(\Exception::class);

        $registeredProduct = new Product();
        $registeredProduct->setId(5);

        $this->repository->method("findById")
            ->willReturn($registeredProduct);

        $newProduct = new Product();
        $newProduct->setId(5);

        $this->service->register($newProduct);
    }

    public function testDelete()
    {
        $product = new Product();
        $product->setId(1);

        $this->repository->expects(self::once())
            ->method("delete")
            ->with(self::equalTo($product));

        $this->repository->method("findById")
            ->willReturn($product)
            ->with(self::equalTo($product->getId()));

        $this->service->delete(1);
        self::assertTrue(true, "Successfully deleted!");
    }

    public function testDeleteFailed()
    {
        $this->repository->expects(self::never())
            ->method("delete");

        $this->repository->method("findById")->with(self::equalTo(1))
            ->willReturn(null);

        $this->expectException(\Exception::class);
        $this->service->delete(1);
    }

    public function testMock()
    {
        $product = new Product();
        $product->setId(1);

        $this->repository->expects(self::once())
            ->method("findById")
            ->willReturn($product);

        $result = $this->repository->findById(1);
        self::assertEquals($product, $result);

    }


}