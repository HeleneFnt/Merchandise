<?php
namespace App\Controllers;

use App\services\ApiService;
use App\Models\Product;
class CategoryController {
    private $apiService;

    public function __construct() {
        $this->apiService = new ApiService();
    }

    public function showCategory($categoryName) {
        if (!$this->validateCategoryName($categoryName)) {
            $this->handleError(400, "Invalid category name.");
        }

        try {
            $productsData = $this->apiService->fetchProductsByCategory($categoryName);
            $categories = $this->apiService->fetchAllCategories();
        } catch (\Exception $e) {
            $this->handleError(500, $e->getMessage());
        }

        if (!is_array($productsData) || !is_array($categories)) {
            $this->handleError(500, "Failed to fetch data.");
        }

        $products = array_map([$this, 'mapToProduct'], $productsData);
        $this->renderView($categoryName, $products, $categories);
    }

    private function validateCategoryName($categoryName) {
        return !empty($categoryName) && is_string($categoryName);
    }

    private function handleError($code, $message) {
        http_response_code($code);
        echo $message;
        exit;
    }

    private function mapToProduct($product) {
        return new Product(
            $product['id'],
            $product['title'],
            $product['price'],
            $product['description'],
            $product['category'],
            $product['image']
        );
    }

    private function renderView($categoryName, $products, $categories) {
        extract(compact('categoryName', 'products', 'categories'));
        include __DIR__ . '/../includes/header.php';
        include __DIR__ . '/../views/category.tpl.php';
        include __DIR__ . '/../includes/footer.php';


    }
}