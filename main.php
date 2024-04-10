<?php

require_once('src\Homepage\Handler.php');
require_once('src\Login\Handler.php');
require_once('src\Register\Handler.php');
require_once('src\Annonces\Handler.php');
require 'vendor/autoload.php'; // Inclure l'autoloader Composer

// use Kreait\Firebase\Factory;

// $firebase = (new Factory)
//     ->withServiceAccount('/src/config.json')
//     ->create();

// $auth = $firebase->getAuth(); // Obtenez une instance de l'authentification Firebase

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
        
        case '/Annonces':
            annonces_handler();
            break;
    }
}

route_request();

?>
