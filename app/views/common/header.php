<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SITENAME</title>
  <link rel="stylesheet" href="<?=URLROOT?>/public/css/style.css">

</head>

<body>
  <header>
    <img src="<?=URLROOT?>/public/img/logo.png" alt="logo" class="logo">

    <nav>
      <ul class="nav_links">
        <li id="home_link"><a href="/pages/home">Home</a></li>
        <li><a href="/pages/home">Product</a></li>
        <li><a href="/pages/home">Design</a></li>
        <li><a href="/pages/about">About</a></li>
        <li><a href="/pages/service">Service</a></li>
      </ul>
    </nav>

    <div class="search_bar">
      <input type="text " placeholder="Search.. " name="keyword" id="keyword">
      <div class="btn"><img src="<?=URLROOT?>/public/img/search.png " alt="icon_search "></div>
    </div>

    <a href="" class="cart"><img src="<?=URLROOT?>/public/img/trolley.png " alt="icon_cart "></a>
  </header>
