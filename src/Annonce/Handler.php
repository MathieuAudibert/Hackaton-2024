<?php

require_once('src\Annonce\View.php');

function annonces_handler() {
    $view = Annonces_view();

    echo $view;
} 