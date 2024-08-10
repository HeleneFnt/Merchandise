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
                    <a href="/" class="logo">
                        <img src="assets/images/logo.png" alt="Logo">
                    </a>
                    <!-- Logo End -->
                    <!-- Menu Start -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="/" class="active">Home</a></li>
                        <li class="submenu">
                            <a href="javascript:;">Pages</a>
                            <ul>
                                <li><a href="/category/jewelery">Jewelery</a></li>
                                <li><a href="/category/electronics">Electronics</a></li>
                                <li><a href="/category/men's%20clothing">Men's Clothing</a></li>
                                <li><a href="/category/women's%20clothing">Women's Clothing</a></li>
                            </ul>
                        </li>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- Menu End -->
                </nav>
            </div>
        </div>
    </div>
</header>

