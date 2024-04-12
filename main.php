<?php
session_start();

require_once('src\Homepage\Handler.php');
require_once('src\Login\Handler.php');
require_once('src\Register\Handler.php');
require_once('src\Annonce\Handler.php');
require_once('src\Profile\Handler.php');
require_once('src\Produit\Handler.php');
require_once('src\Apropos\Handler.php');
require_once('bdd.php');
function route_request()
{
    $uri = $_SERVER['REQUEST_URI'];

    switch ($uri) {

        case '/':
            home_handler();
            break;
        case '/Login':
            login_handler();
            break;

        case '/Register':
            register_handler();
            break;
        case '/Annonces':
            annonces_handler($_POST);
            break;
        case '/Logout':
            require('src\Login\Logout.php');
            break;
        case '/Profile':
            profile_handler();
            break;
        case '/Products':
            product_handler();
            break;
        case '/update_session.php':
            require('src/Login/update_session.php');
            break;
        case '/Apropos':
            apropos_handler();
            break;
    }
}

route_request();
