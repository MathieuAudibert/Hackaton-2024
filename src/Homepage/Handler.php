<?php

require_once('src\Homepage\View.php');
require_once('src\Homepage\Model.php');

function home_handler()
{
    $view = Home_View();
    $model = Home_Model();

    echo $view;
    echo $model;
}