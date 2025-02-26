<?php

if (isset($_GET["p"])) {
    switch ($_GET["p"]) {
        case "geo":
            include '../templates/geographie.php';
            $title = "Géographie";
            break;
        case 'hist':
            include '../templates/histoire.php';
            $title = 'Histoire';
            break;
        case 'cult':
            include '../templates/culture.php';
            $title = 'Culture';
            break;
        case 'gal':
            include '../templates/galerie.php';
            $title = 'Galerie';
            break;
        case 'form':
            include '../templates/contact.php';
            $title = 'Contact';
            break;
        case 'link':
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