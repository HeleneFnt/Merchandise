<?php
session_start(); // Start the session

if (!isset($_SESSION['dateFirstVisit'])) {
    // For the first visit, set the actual date
    $_SESSION['dateFirstVisit'] = date("Y-m-d H:i:s");
}

if (!isset($_SESSION['countViewPage'])) {
    // Initiate the counter of pages viewed
    $_SESSION['countViewPage'] = 0;
} else {
    // If it's not the first visit, increment the counter of pages viewed
    $_SESSION['countViewPage']++;
}
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>Merchandise</title>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
<!--    <link rel="stylesheet" href="/assets/css/styles.css">-->
    <link rel="stylesheet" href="/assets/css/font-awesome.css">
    <link rel="stylesheet" href="/assets/css/templatemo-hexashop.css">
    <link rel="stylesheet" href="/assets/css/owl-carousel.css">
    <link rel="stylesheet" href="/assets/css/lightbox.css">
</head>
<body>

<!-- Header Area Start -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- Logo Start -->
                    <a href="index.html" class="logo">
                        <img src="assets/images/logo.png" alt="Logo">
                    </a>
                    <!-- Logo End -->
                    <!-- Menu Start -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="#men">Men's</a></li>
                        <li class="scroll-to-section"><a href="#women">Women's</a></li>
                        <li class="scroll-to-section"><a href="#kids">Kid's</a></li>
                        <li class="submenu">
                            <a href="javascript:;">Pages</a>
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="products.html">Products</a></li>
                                <li><a href="single-product.html">Single Product</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:;">Features</a>
                            <ul>
                                <li><a href="#">Features Page 1</a></li>
                                <li><a href="#">Features Page 2</a></li>
                                <li><a href="#">Features Page 3</a></li>
                                <li><a rel="nofollow" href="https://templatemo.com/page/4" target="_blank">Template Page 4</a></li>
                            </ul>
                        </li>
                        <li class="scroll-to-section"><a href="#explore">Explore</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- Menu End -->
                </nav>
            </div>
        </div>
    </div>
</header>

