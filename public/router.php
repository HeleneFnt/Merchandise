<?php
// file router.php working as a FrontController

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/controllers/HomeController.php';

// Parse the request URI to determine the path
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = trim($path, '/');


// Route the request based on the path
if ($path === '' || $path === 'index.php') {
    // If the path is root or index.php, route to HomeController's index method
    (new HomeController())->index();
} else {
    // If none of the above conditions match, return a 404 Not Found status
    http_response_code(404);
    // Include the 404.tpl.php page
    include __DIR__ . '/../src/includes/errorheader.php';
    include __DIR__ . '/../src/views/404.tpl.php';
    include __DIR__ . '/../src/includes/errorfooter.php';
}
