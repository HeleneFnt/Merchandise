<?php
// src/controllers/HomeController.php
namespace App\Controllers;

use App\services\ApiService;
use App\Models\Product;

class HomeController
{
    private $apiService;

    public function __construct() {
        $this->apiService = new ApiService();
    }

    public function showHome() {
        try {
            $categories = $this->apiService->fetchAllCategories();
            $productsData = $this->apiService->fetchProducts(10); // Limité à 10 produits
        } catch (\Exception $e) {
            $this->handleError(500, $e->getMessage());
        }

        if (!is_array($categories) || !is_array($productsData)) {
            $this->handleError(500, "Failed to fetch data.");
        }

        $products = array_map([$this, 'mapToProduct'], $productsData);
        $this->renderView($categories, $products);
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

    private function renderView($categories, $products) {
        // Extract variables for use in the view
        extract(compact('categories', 'products'));

        // Include the view files
        include __DIR__ . '/../includes/header.php';
        include __DIR__ . '/../views/home.tpl.php';
        include __DIR__ . '/../includes/footer.php';
    }
}