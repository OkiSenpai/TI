<?php

if (isset($_GET["p"])) {
    switch ($_GET["p"]) {
        case "geo":
            $title = "Géographie";
            include '../templates/geographie.php';
            break;
        case 'hist':
            $title = 'Histoire';
            include '../templates/histoire.php';
            break;
        case 'cult':
            $title = 'Culture';
            include '../templates/culture.php';
            break;
        case 'gal':
            $title = 'Galerie';
            include '../templates/galerie.php';
            break;
        case 'form':
            $title = 'Contact';
            include '../templates/contact.php';
            break;
        case 'link':
            $title = 'Liens';
            include '../templates/liens.php';
            break;
        default:
            $title = 'Erreur 404';
            include '../templates/page-404.php';
            break;
    }
} else {
    $title = 'Accueil';

    include '../templates/accueil.php';
}