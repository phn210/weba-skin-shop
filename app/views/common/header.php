<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=SITENAME?></title>
  <link rel="stylesheet" href="<?=URLROOT?>/public/css/style.css">
  <!--link rel="stylesheet" href="<?=URLROOT?>/public/css/home.css"-->
  <link rel="stylesheet" href="<?=URLROOT?>/public/css/product_detail.css">
  <link rel="stylesheet" href="<?=URLROOT?>/public/css/product_list.css">
  <link rel="stylesheet" href="<?=URLROOT?>/public/css/cart.css">
  <link rel="stylesheet" href="<?=URLROOT?>/public/css/service.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>

<body style="background: url(<?=URLROOT?>/public/img/home/logo/home_background.png");>
  <header>
    <img src="<?=URLROOT?>/public/img/logo.png" alt="logo" class="logo">

    <nav>
      <ul class="nav_links">
        <li id="home_link"><a href="<?=URLROOT?>/pages/home">Home</a></li>
        <li><a href="<?=URLROOT?>/products/list">Product</a></li>
        <li><a href="<?=URLROOT?>/pages/home">Design</a></li>
        <li><a href="<?=URLROOT?>/pages/about">About</a></li>
        <li><a href="<?=URLROOT?>/pages/service">Service</a></li>
      </ul>
    </nav>

    <form class="search_bar" action="<?=URLROOT?>/products/search" name="search_form" method="GET">
      <input type="text" placeholder="Search.. " name="keyword" id="keyword">
      <div class="btn"><img src="<?=URLROOT?>/public/img/search.png" alt="icon_search "></div>
    </form>

    <a href="<?=URLROOT?>/carts/cart" class="cart"><img src="<?=URLROOT?>/public/img/trolley.png " alt="icon_cart "></a>

  </header>
