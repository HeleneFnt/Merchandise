<?php
namespace Tests;

use App\Services\ApiService;
use PHPUnit\Framework\TestCase;

class ApiServiceTest extends TestCase
{
private $apiService;

protected function setUp(): void
{
$this->apiService = new ApiService();
}

public function testFetchProductsByCategory()
{
$category = 'electronics';
$products = $this->apiService->fetchProductsByCategory($category);

$this->assertIsArray($products);
$this->assertNotEmpty($products);
$this->assertArrayHasKey('title', $products[0]);
}

public function testFetchAllCategories()
{
$categories = $this->apiService->fetchAllCategories();

$this->assertIsArray($categories);
$this->assertNotEmpty($categories);
}

public function testFetchProducts()
{
$products = $this->apiService->fetchProducts();

$this->assertIsArray($products);
$this->assertNotEmpty($products);
}

public function testFetchProductById()
{
$productId = 1;
$product = $this->apiService->fetchProductById($productId);

$this->assertIsArray($product);
$this->assertArrayHasKey('title', $product);
}
}
