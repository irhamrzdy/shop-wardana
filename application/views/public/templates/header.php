<!DOCTYPE html>
<html lang="en">


<head>
  <!-- Basic Page Needs -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $title ?></title>

  <meta name="keywords" content="Organic, Fresh Food, Farm Store">
  <meta name="description" content="FreshMart - Organic, Fresh Food, Farm Store HTML Template">
  <meta name="author" content="tivatheme">

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/front/img/favicon.png" type="image/png">

  <!-- Mobile Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:300,400,700" rel="stylesheet">

  <!-- Vendor CSS -->
  <link rel="stylesheet" href="assets/front/libs/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="assets/front/libs/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/front/libs/font-material/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="assets/front/libs/nivo-slider/css/nivo-slider.css">
  <link rel="stylesheet" href="assets/front/libs/nivo-slider/css/animate.css">
  <link rel="stylesheet" href="assets/front/libs/nivo-slider/css/style.css">
  <link rel="stylesheet" href="assets/front/libs/owl.carousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/front/libs/slider-range/css/jslider.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/front/css/style.css">
  <link rel="stylesheet" href="assets/front/css/reponsive.css">
</head>

<body class="home home-5">
  <div id="all">
    <!-- Header -->
    <header id="header">
      <div class="header-top">
        <span id="toggle-mobile-menu"><i class="zmdi zmdi-menu"></i></span>

        <!-- Logo -->
        <div class="logo">
          <a href="">
            <img class="img-responsive" src="assets/front/img/logo.png" alt="Logo">
          </a>
        </div>
        <!-- Search -->
        <div class="form-search">
          <form action="#" method="get">
            <input type="text" class="form-input" placeholder="Search">
            <button type="submit" class="fa fa-search"></button>
          </form>
        </div>

        <!-- Main Menu -->
        <div id="main-menu">
          <ul class="menu">
            <li>
              <a href="" title="Homepage"><i class="fa fa-home"></i> Home</a>
            </li>
            <li class="dropdown dropdown-submenu">
              <a href="#" title="Keranjang"><i class="fa fa-tags"></i> Product</a>
              <div class="dropdown-menu">
                <ul>
                  <li class="has-image">
                    <img src="assets/front/img/product/product-category-1.png" alt="Product Category Image">
                    <a href="product-grid-left-sidebar.html" title="Vegetables">Vegetables</a>
                  </li>
                  <li class="has-image">
                    <img src="assets/front/img/product/product-category-2.png" alt="Product Category Image">
                    <a href="product-grid-left-sidebar.html" title="Fruits">Fruits</a>
                  </li>
                  <li class="has-image">
                    <img src="assets/front/img/product/product-category-3.png" alt="Product Category Image">
                    <a href="product-grid-left-sidebar.html" title="Bread">Bread</a>
                  </li>
                  <li class="has-image">
                    <img src="assets/front/img/product/product-category-4.png" alt="Product Category Image">
                    <a href="product-grid-left-sidebar.html" title="Juices">Juices</a>
                  </li>
                  <li class="has-image">
                    <img src="assets/front/img/product/product-category-5.png" alt="Product Category Image">
                    <a href="product-grid-left-sidebar.html" title="Tea and coffee">Tea and coffee</a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a href="<?= base_url() ?>cart" title="Keranjang"><i class="fa fa-cart-plus"></i> Keranjang</a>
            </li>
          </ul>
        </div>
      </div>
    </header>