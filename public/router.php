<?php
// Start a session for managing data
session_start();

// Require Composer's autoload file
require_once '../vendor/autoload.php';

// Create instances of Controllers
$homeController = new \App\Controllers\HomeController();
$categoryController = new \App\Controllers\CategoryController();
$productController = new \App\Controllers\ProductController();

// Parse the URL to determine which page to show
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Router
if ($requestUri === '/' || $requestUri === '/index.php') {
    // Home page
    $homeController->showHome();
} elseif (preg_match('/^\/category\/(.+)$/', $requestUri, $matches)) {
    // Category page with a slug
    $slug = urldecode($matches[1]); // Decode URL-encoded category name
    $categoryController->showCategory($slug);
} elseif (preg_match('/^\/product\/(\d+)$/', $requestUri, $matches)) {
    // Product page with an ID
    $productId = (int)$matches[1];
    $productController->showProduct($productId);
} else {
    // 404 Page Not Found
    http_response_code(404);
    require_once '../src/includes/errorheader.php';
    require_once '../src/views/404.tpl.php';
    require_once '../src/includes/errorfooter.php';
}
