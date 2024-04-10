<?php

require_once('src\Register\View.php');

function register_handler() {
    $view = register_view();

    echo $view;
}