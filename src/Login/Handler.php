<?php

require_once('src\Login\View.php');

function login_handler() {
    $view = Login_View();
    echo $view;
}