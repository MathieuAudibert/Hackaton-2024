<?php

require_once('src\Annonces\View.php');
include('Model.php');

function annonces_handler($POST) {

    if ( isset($POST["Validation_annonce"])) {      
        createAnnonce($POST["nom_jeu"], $POST["prix"], $POST["description"], $POST["adresse"], $POST["image"]);
    }

    $view = Annonces_view();

}