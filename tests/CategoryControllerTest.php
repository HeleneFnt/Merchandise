<?php


use PHPUnit\Framework\TestCase;
use App\Controllers\CategoryController;
use App\Services\ApiService;

class CategoryControllerTest extends TestCase
{
    private $categoryController;
    private $apiServiceMock;

    protected function setUp(): void
    {
        $this->apiServiceMock = $this->createMock(ApiService::class);
        $this->categoryController = new CategoryController($this->apiServiceMock);
    }

    public function testShowCategoryWithValidCategory()
    {
        $categoryName = 'electronics';
        $products = [
            (object)['title' => 'Product 1', 'description' => 'Description 1', 'image' => 'image1.jpg'],
            (object)['title' => 'Product 2', 'description' => 'Description 2', 'image' => 'image2.jpg']
        ];
        $categories = ['electronics', 'jewelery'];

        $this->apiServiceMock->method('getProductsByCategory')->willReturn($products);
        $this->apiServiceMock->method('getCategories')->willReturn($categories);

        ob_start();
        $this->categoryController->showCategory($categoryName);
        $output = ob_get_clean();

        $this->assertStringContainsString('Products in Category: electronics', $output);
        $this->assertStringContainsString('Product 1', $output);
        $this->assertStringContainsString('Product 2', $output);
    }

    public function testShowCategoryWithInvalidCategory()
    {
        $categoryName = 'invalidCategory';
        $categories = ['electronics', 'jewelery'];

        $this->apiServiceMock->method('getProductsByCategory')->willReturn([]);
        $this->apiServiceMock->method('getCategories')->willReturn($categories);

        ob_start();
        $this->categoryController->showCategory($categoryName);
        $output = ob_get_clean();

        $this->assertStringContainsString('No products found in this category.', $output);
    }
}
