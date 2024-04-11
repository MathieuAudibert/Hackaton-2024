<?php

require_once('src\Annonce\View.php');
include('Model.php');

function annonces_handler($POST) {

    if ( isset($POST["Validation_annonce"])) {      
        createAnnonce($POST["nom_jeu"], $POST["prix"], $POST["descriptions"], $POST["adresse"], $POST["images"]);
    }

    $view = Annonces_view();

}