<?php
// src/controllers/ProductController.php

namespace App\Controllers;

use App\services\ApiService;
use App\Models\Product;

class ProductController
{
    private $apiService;

    public function __construct() {
        $this->apiService = new ApiService();
    }

    public function showProduct($productId) {
        if (!is_numeric($productId) || $productId <= 0) {
            $this->handleError(400, "Invalid product ID.");
        }

        try {
            $productData = $this->apiService->fetchProductById($productId);
            $categories = $this->apiService->fetchAllCategories();
        } catch (\Exception $e) {
            $this->handleError(500, $e->getMessage());
        }

        if (!is_array($productData) || empty($productData)) {
            $this->handleError(404, "Product not found.");
        }

        $product = $this->mapToProduct($productData);
        $this->renderView($product, $categories);
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

    private function handleError($code, $message) {
        http_response_code($code);
        echo $message;
        exit;
    }

    private function renderView($product, $categories) {
        // Extract variables for use in the view
        extract(compact('product', 'categories'));

        // Include the view files
        include __DIR__ . '/../includes/header.php';
        include __DIR__ . '/../views/product.tpl.php';
        include __DIR__ . '/../includes/footer.php';
    }
}
