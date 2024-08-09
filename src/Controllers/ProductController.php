<?php
// src/controllers/ProductController.php

namespace Controllers;

use App\services\ApiService;
use App\models\Product;

class ProductController
{
    private $apiService;

    public function __construct() {
        $this->apiService = new ApiService();
    }

    public function show($productId) {
        if (!is_numeric($productId) || $productId <= 0) {
            $this->handleError(400, "Invalid product ID.");
        }

        try {
            $productData = $this->apiService->fetchProductById($productId);
        } catch (\Exception $e) {
            $this->handleError(500, $e->getMessage());
        }

        if (!is_array($productData) || empty($productData)) {
            $this->handleError(404, "Product not found.");
        }

        $product = $this->mapToProduct($productData);
        $this->renderView($product);
    }

    private function mapToProduct($product) {
        return new Product(
            $product['id'],
            htmlspecialchars($product['title'], ENT_QUOTES, 'UTF-8'),
            htmlspecialchars($product['price'], ENT_QUOTES, 'UTF-8'),
            htmlspecialchars($product['description'], ENT_QUOTES, 'UTF-8'),
            htmlspecialchars($product['category'], ENT_QUOTES, 'UTF-8'),
            htmlspecialchars($product['image'], ENT_QUOTES, 'UTF-8')
        );
    }

    private function handleError($code, $message) {
        http_response_code($code);
        echo $message;
        exit;
    }

    private function renderView($product) {
        // Extract variables for use in the view
        extract(compact('product'));

        // Include the view files
        include __DIR__ . '/../includes/header.php';
        include __DIR__ . '/../views/product.tpl.php';
        include __DIR__ . '/../includes/footer.php';
    }
}
