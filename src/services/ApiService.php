<?php
namespace App\Services;

class ApiService
{
    private function getApiData($url) {
        $json = file_get_contents($url);
        $data = json_decode($json, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \Exception("Failed to decode JSON from API.");
        }

        return $data;
    }

    public function fetchProductsByCategory($categoryName) {
        $url = "https://fakestoreapi.com/products/category/{$categoryName}";
        return $this->getApiData($url);
    }

    public function fetchAllCategories() {
        $url = 'https://fakestoreapi.com/products/categories';
        return $this->getApiData($url);
    }

    public function fetchProducts($limit = 10) {
        $url = "https://fakestoreapi.com/products?limit={$limit}";
        return $this->getApiData($url);
    }
    public function fetchProductById($productId) {
        $url = "https://fakestoreapi.com/products/{$productId}";
        return $this->getApiData($url);
    }
}
