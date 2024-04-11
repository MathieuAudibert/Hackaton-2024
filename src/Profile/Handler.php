<?php

require_once('src\Profile\View.php');
require_once('src\Profile\Model.php');

function profile_handler() {
    $view = profile_View();
    $model = profile_model();
    echo $model;
    echo $view;
}