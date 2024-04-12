<?php

require_once('src/Register/View.php');
require_once('src/Register/Model.php');

function register_handler() {
    $view = register_view();
    $model = register_model();
    echo $view;
    echo $model;
}

?>
