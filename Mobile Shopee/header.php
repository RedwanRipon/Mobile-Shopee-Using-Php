<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Shopee</title>

        <!------bootstrap css------>
    <link rel="stylesheet" type="text/css" href="assests/css/bootstrap.min.css">
    <!------font awesome icon css------>
    <link rel="stylesheet" type="text/css" href="assests/css/all.min.css">
    <!------Magnetic popup css------>
    <link rel="stylesheet" type="text/css" href="assests/vendor/Magnific-Popup/dist/magnific-popup.css">
    <!------owl-carousal css------>
    <link rel="stylesheet" type="text/css" href="assests/vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assests/vendor/owl-carousel/css/owl.theme.default.min.css">

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">

    <?php
    // require functions.php file
    require ('functions.php');
    ?>

</head>
<body>

<!-- start #header -->
<header id="header">
    <div class="strip d-flex justify-content-between px-4 py-1 bg-light info">
        <p class="font-rale font-size-12 text-black-50 m-0 typed ">1013 Eidgha Road,Ibrahimpur,Mirpur-14,Dhaka-1206
            phone: (+880) 1677383211 Email: mdredwanh09@gmail.com</p>
        <div class="font-rale font-size-14">
            <a href="#" class="px-3 border-right border-left text-dark">My Account</a>
            <a href="cart.php" class="px-3 border-right text-dark">Whishlist (<?php echo count($product->getData('wishlist')); ?>)</a>
        </div>
    </div>

    <!-- Primary Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
        <a class="navbar-brand" href="index.php">Mobile Shopee</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-rubik">
                <li class="nav-item active">
                    <a class="nav-link" href="#">On Sale</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Category <i class="fas fa-chevron-circle-down"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Products <i class="fas fa-chevron-circle-down"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Coming Soon</a>
                </li>
            </ul>
            <form action="#" class="font-size-14 font-rale">
                <a href="cart.php" class="py-2 rounded-pill color-primary-bg">&nbsp; Your Select Items:
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart')); ?></span>
                </a>
            </form>
        </div>
    </nav>
    <!-- !Primary Navigation -->

</header>
<!-- !start #header -->

<!-- start #main-site -->
<main id="main-site">