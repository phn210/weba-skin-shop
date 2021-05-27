<?php

    // Database params
    define('DB_HOST', 'localhost:3307');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'web_db1');

    // APPROOT
    define('APPROOT', dirname(dirname(__FILE__)));

    // URLROOT (Dynamic links)
    define('URLROOT', 'http://localhost/weba-skin-shop');

    // ASSET
    define('FRAMEWORK', 'weba-skin-shop');

    // Sitename
    define('SITENAME', 'WebA Skin Shop');

    /*
    - Front-end(html/css/js): Hằng + Nguyên
    - Back-end: Long + Toàn + Nguyên
        + Home & Navigator: Nguyên
        + Tìm kiếm + Danh sách sản phẩm: Long
        + Chi tiết sản phẩm + Quản lý giỏ hàng: Toàn
    */