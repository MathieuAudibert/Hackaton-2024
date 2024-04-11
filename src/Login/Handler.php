<?php

require_once('src\Login\View.php');
require_once('src\Login\Model.php');

function login_handler() {
    $view = Login_View();
    $model = login_model();
    echo $model;
    echo $view;
}