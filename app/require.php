<?php
    // Require libraries
    require_once 'libraries/Core.php';
    require_once 'libraries/Controller.php';
    require_once 'libraries/Database.php';

    require_once 'config/config.php';

    // Instantiate core class
    if(!session_id()) {
        session_start();
    }
    $init = new Core();