<?php
// public/index.php

require '../vendor/autoload.php';
require '../src/Controllers/HomeController.php';

use App\Controllers\HomeController;

// Create a new instance of the HomeController class
$controller = new HomeController();
// To display Home page
$controller->showHome();
