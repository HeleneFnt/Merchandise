<?php
// src/controllers/HomeController.php

namespace Controllers;

class HomeController
{
    private function escapeHtml($string) {
        return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
    }

    private function getApiData($url) {
        $json = file_get_contents($url);
        return json_decode($json);
    }

    public function showHome() {
        $apiUrlCategories = 'https://fakestoreapi.com/products/categories';
        $apiUrlProducts = 'https://fakestoreapi.com/products?limit=10';

        $categories = $this->getApiData($apiUrlCategories);
        $products = $this->getApiData($apiUrlProducts);

        // Include the views and pass the data
        include __DIR__ . '/../includes/header.php';
        include __DIR__ . '/../views/home.tpl.php';
        include __DIR__ . '/../includes/footer.php';
    }
}
