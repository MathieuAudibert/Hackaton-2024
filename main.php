<?php

require_once('src\Homepage\Handler.php');
require_once('src\Login\Handler.php');
require_once('src\Register\Handler.php');
require_once('src\Annonce\Handler.php');
require_once('src\Profile\Handler.php');

function route_request(){
    $uri = $_SERVER['REQUEST_URI'];

    switch($uri){

        case '/':
            home_handler();
            break;
        case '/Login':
            login_handler();
            break;

        case '/Register':
            register_handler();
            break;
        case '/Create':
            annonces_handler();
            break;
        case '/Logout':
            require('src\Login\Logout.php');
            break;
        case '/Profile':
            profile_handler();
            break;
    }
}

route_request();

?>
