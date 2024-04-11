<?php


require_once("src/Produit/View.php");
require_once("src/Produit/Model.php");

function product_handler(){
    $view = product_view();
    $model = product_model();
    echo $model;
    echo $view;
}
?>