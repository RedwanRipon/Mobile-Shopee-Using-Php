<?php

// require MySQL Connection
require ('database/DBController.php');

// require Product Class
require ('database/Product.php');

//require product class
require ("database/Blog.php");

// require Cart Class
require ('database/Cart.php');


// DBController object
$db = new DBController();

// Product object
$product = new Product($db);
$product_shuffle = $product->getData();

//blog object
$blog = new Blog($db);

// Cart object
$Cart = new Cart($db );
