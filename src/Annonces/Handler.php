<?php

require_once('src\Annonces\View.php');

function annonces_handler() {
    $view = Annonces_view();

    echo $view;
}