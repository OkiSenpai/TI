<?php

if (isset($_GET["p"])) {
    switch ($_GET["p"]) {
        case "geographie":
            include '../templates/geographie.php';
            break;
        case 'histoire':
            include '../templates/histoire.php';
            break;
        case 'culture':
            include '../templates/culture.php';
            break;
        case 'galerie':
            include '../templates/galerie.php';
            break;
        case 'contact':
            include '../templates/contact.php';
            break;
        case 'liens':
            include '../templates/liens.php';
            break;
        default:
            include '../templates/page-404.php';
            break;
    }
} else {
    include '../templates/accueil.php';
}