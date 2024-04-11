<?php

require_once('src\Homepage\View.php');

function home_handler() {
    $view = Home_View();

    echo $view;
}