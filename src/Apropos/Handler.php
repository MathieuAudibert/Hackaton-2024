<?php

require_once('src/Apropos/View.php');
require_once('src/Apropos/Model.php');

function apropos_handler()
{
    $view = apropos_view();
    $model = apropos_model();
    echo $view;
    echo $model;
}
