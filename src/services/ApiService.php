<?php
namespace App\services;
// TODO : Add tests and check if API is vulnerable
// TODO : Add a cache system to avoid making too many requests to the API
// TODO : Add error handling for API requests
// TODO : Add a search feature to search for products
// TODO : Add a feature to sort products by price, name, etc.
// TODO : Add a feature to filter products by price, category, etc.

class ApiService {
    private $apiUrl = "https://fakestoreapi.com/";

    // Fetches all Categories from the API, including images
    public function fetchCategories() {
        $products = $this->fetchData('products');
        if (!$products) {
            return [];
        }

        // Extract unique categories and their images
        $categories = [];
        foreach ($products as $product) {
            if (!isset($categories[$product['category']])) {
                $categories[$product['category']] = $product['image'];
            }
        }

        return $categories;
    }

    // Fetches all products by Category from the API
    public function fetchProductsByCategory($category) {
        return $this->fetchData("products/category/{$category}");
    }

    // Fetches a product by ID from the API
    public function fetchProductById($id) {
        return $this->fetchData("products/{$id}");
    }

// Fetches products in the "jewelery" category
    public function fetchJewelryProducts() {
        return $this->fetchProductsByCategory('jewelery');
    }

    // API request using cURL (private method)
    private function fetchData($endpoint) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->apiUrl . $endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10); // Set timeout for cURL
        $response = curl_exec($ch);

        // Error handling
        if (curl_errno($ch)) {
            echo 'cURL error: ' . curl_error($ch);
            return null;
        }

        curl_close($ch);
        $data = json_decode($response, true);

        // Check if the response is valid JSON
        if (json_last_error() !== JSON_ERROR_NONE) {
            echo 'JSON error: ' . json_last_error_msg();
            return null;
        }

        return $data;
    }
}
