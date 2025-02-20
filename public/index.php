<?php

if (isset($_GET["p"])) {
    switch ($_GET["p"]) {
        case "geographie":
            include '../templates/geographie.php';
            $title = "Géographie";
            break;
        case 'histoire':
            include '../templates/histoire.php';
            $title = 'Histoire';
            break;
        case 'culture':
            include '../templates/culture.php';
            $title = 'Culture';
            break;
        case 'galerie':
            include '../templates/galerie.php';
            $title = 'Galerie';
            break;
        case 'contact':
            include '../templates/contact.php';
            $title = 'Contact';
            break;
        case 'liens':
            include '../templates/liens.php';
            $title = 'Liens';
            break;
        default:
            include '../templates/page-404.php';
            $title = 'Erreur 404';
            break;
    }
} else {
    $title = 'Accueil';

    include '../templates/accueil.php';
}